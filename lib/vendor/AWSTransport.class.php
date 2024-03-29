<?php

/**
 * This file requires SwiftMailer.
 * (c) 2011 John Hobbs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Sends Messages over AWS.
 * @package Swift
 * @subpackage Transport
 * @author John Hobbs
 */
class Swift_AWSTransport implements Swift_Transport
{
  /**
   * Create a new AWSTransport.
   * @param string $AWSAccessKeyId Your access key.
   * @param string $AWSSecretKey Your secret key.
   * @param boolean $debug Set to true to enable debug messages.
   * @param string $endpoint The AWS endpoint to use.
   */
  public function __construct($AWSAccessKeyId, $AWSSecretKey, $debug = false, $endpoint = 'https://email.us-east-1.amazonaws.com/')
  {
    $this->AWSAccessKeyId = $AWSAccessKeyId;
    $this->AWSSecretKey = $AWSSecretKey;
    $this->endpoint = $endpoint;
    $this->debug = $debug;
  }

  /**
   * Create a new AWSTransport.
   *
   * @param string $AWSAccessKeyId Your access key.
   * @param string $AWSSecretKey Your secret key.
   *
   * @return Swift_AWSTransport
   */
  public static function newInstance($AWSAccessKeyId, $AWSSecretKey)
  {
    return new Swift_AWSTransport($AWSAccessKeyId, $AWSSecretKey);
  }

  /**
   * Send the given Message.
   *
   * Recipient/sender data will be retreived from the Message API.
   * The return value is the number of recipients who were accepted for delivery.
   *
   * @param Swift_Mime_Message $message
   * @param string[] &$failedRecipients to collect failures by-reference
   * @return int
   * @throws AWSConnectionError
   */
  public function send(Swift_Mime_Message $message, &$failedRecipients = null)
  {
    $date = date('D, j F Y H:i:s O');
    if (function_exists('hash_hmac') and in_array('sha1', hash_algos()))
    {
      $hmac = base64_encode(hash_hmac('sha1', $date, $this->AWSSecretKey, true));
    }
    else
    {
      $hmac = $this->calculate_RFC2104HMAC($date, $this->AWSSecretKey);
    }
    $auth = "AWS3-HTTPS AWSAccessKeyId=" . $this->AWSAccessKeyId . ", Algorithm=HmacSHA1, Signature=" . $hmac;

    $host = parse_url($this->endpoint, PHP_URL_HOST);
    $path = parse_url($this->endpoint, PHP_URL_PATH);

    $fp = fsockopen('ssl://' . $host, 443, $errno, $errstr, 30);

    if (!$fp) {
      throw new AWSConnectionError("$errstr ($errno)");
    }

    $socket = new ChunkedTransferSocket($fp, $host, $path);

    $socket->header("Date", $date);
    $socket->header("X-Amzn-Authorization", $auth);

    $socket->write("Action=SendRawEmail&RawMessage.Data=");

    $ais = new AWSInputByteStream($socket);
    $message->toByteStream($ais);
    $ais->flushBuffers();

    $result = $socket->read();

    if (defined('SWIFT_AWS_DEBUG')) {
      echo "=== Start AWS Response ===\r\n";
      echo $result->body;
      echo "===  End AWS Response  ===\r\n";
    }


    if (200 == $result->code)
    {
      return count((array) $message->getTo());
    }
    else
    {
      return 0;
    }
  }

  /**
   * Cribbed from php-aws - Thanks!
   * https://github.com/tylerhall/php-aws/blob/master/class.awis.php
   * (c) Tyler Hall
   * MIT License
   */
  protected function calculate_RFC2104HMAC($data, $key)
  {
    return base64_encode(
      pack("H*", sha1((str_pad($key, 64, chr(0x00))
                       ^ (str_repeat(chr(0x5c), 64))) .
                      pack("H*", sha1((str_pad($key, 64, chr(0x00))
                                       ^ (str_repeat(chr(0x36), 64))) . $data))))
    );
  }

  public function isStarted()
  {
  }

  public function start()
  {
  }

  public function stop()
  {
  }

  public function registerPlugin(Swift_Events_EventListener $plugin)
  {
  }
}

/**
 * Convenience methods to use a socket for chunked transfer in HTTP
 */
class ChunkedTransferSocket
{
  /**
   * @param $socket
   * @param $host
   * @param $path
   * @param $method
   */
  public function __construct($socket, $host, $path, $method = "POST")
  {
    $this->socket = $socket;
    $this->write_started = false;
    $this->write_finished = false;
    $this->read_started = false;

    fwrite($this->socket, "$method $path HTTP/1.1\r\n");

    $this->header("Host", $host);
    if ("POST" == $method) {
      $this->header("Content-Type", "application/x-www-form-urlencoded");
    }
    $this->header("Connection", "close");
    $this->header("Transfer-Encoding", "chunked");
  }

  /**
   * Add an HTTP header
   *
   * @param $header
   * @param $value
   */
  public function header($header, $value)
  {
    if ($this->write_started) {
      throw new InvalidOperationException("Can not write header, body writing has started.");
    }
    fwrite($this->socket, "$header: $value\r\n");
  }

  /**
   * Write a chunk of data
   * @param $chunk
   */
  public function write($chunk)
  {
    if ($this->write_finished) {
      throw new InvalidOperationException("Can not write, reading has started.");
    }

    if (!$this->write_started)
    {
      fwrite($this->socket, "\r\n"); // Start message body
      $this->write_started = true;
    }

    fwrite($this->socket, sprintf("%x\r\n", strlen($chunk)));
    fwrite($this->socket, $chunk . "\r\n");
  }

  /**
   * Finish writing chunks and get ready to read.
   */
  public function finishWrite()
  {
    $this->write("");
    $this->write_finished = true;
  }

  /**
   * Read the socket for a response
   */
  public function read()
  {
    if (!$this->write_finished) {
      $this->finishWrite();
    }
    $this->read_started = true;

    $response = new AWSResponse();
    while (!feof($this->socket))
    {
      $response->line(fgets($this->socket));
    }
    $response->complete();
    fclose($this->socket);

    return $response;
  }
}

/**
 * A wrapper to parse an AWS HTTP response
 */
class AWSResponse
{
  public $headers = array();
  public $code = 0;
  public $message = '';
  public $body = '';
  public $xml = null;

  const STATE_EMPTY = 0;
  const STATE_HEADERS = 1;
  const STATE_BODY = 2;

  protected $state = self::STATE_EMPTY;

  public function line($line)
  {
    switch ($this->state)
    {
      case self::STATE_EMPTY:
        $split = explode(' ', $line);
        $this->code = $split[1];
        $this->message = implode(array_slice($split, 2), ' ');
        $this->state = self::STATE_HEADERS;
        break;
      case self::STATE_HEADERS:
        if ("\r\n" == $line) {
          $this->state = self::STATE_BODY;
          break;
        }

        $pos = strpos($line, ':');
        if (false === $pos) {
          throw new InvalidHeaderException($line);
        }
        $key = substr($line, 0, $pos);
        $this->headers[$key] = substr($line, $pos);
        break;
      case self::STATE_BODY:
        $this->body .= $line;
        break;
    }
  }

  public function complete()
  {
    $this->xml = simplexml_load_string($this->body);
  }
}

class AWSConnectionError extends Exception
{
}

class InvalidOperationException extends Exception
{
}

class InvalidHeaderException extends Exception
{
}
