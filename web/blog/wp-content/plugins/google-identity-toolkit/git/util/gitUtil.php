<?php
/**
 * Utility functions.
 */

require_once(dirname(__FILE__) . '/gitContext.php');

class gitUtil {
  private static $EMAIL_PATTERN = '/\w+(\.\w+)*@(\w+(\.\w+)+)/';

  private static $FEDERATED_DOMAINS = array(
    // Gmail
    'gmail.com', 'googlemail.com',
    // Aol
    'aol.com', 'aim.com', 'netscape.net', 'cs.com',
    'ygm.com', 'games.com', 'love.com', 'wow.com',
    // Yahoo
    'yahoo.com', 'rocketmail.com', 'ymail.com', 'y7mail.com',
    'yahoo.com.au', 'yahoo.com.cn', 'yahoo.cn', 'yahoo.com.hk',
    'yahoo.co.nz', 'yahoo.com.pk', 'yahoo.com.tw', 'kimo.com',
    'bellsouth.net', 'ameritech.net', 'att.net', 'attworld.com',
    'flash.net', 'nvbell.net', 'pacbell.net', 'prodigy.net',
    'sbcglobal.net', 'snet.net', 'swbell.net', 'wans.net',
    'btinternet.com', 'btopenworld.com', 'talk21.com', 'rogers.com',
    'nl.rogers.com', 'demobroadband.com', 'xtra.co.nz', 'verizon.net',
    // Hotmail
    'hotmail.com', 'hotmail.co.uk', 'hotmail.fr',
    'hotmail.it', 'live.com', 'msn.com');

  public static function getCurrentUrl() {
    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
    $url .= $_SERVER['SERVER_NAME'];
    if ($_SERVER['SERVER_PORT'] != '80') {
      $url .= $_SERVER['SERVER_PORT'];
    }
    $url .= $_SERVER["REQUEST_URI"];
    return $url;
  }

  public static function sendError($message) {
    exit('Error: ' . $message);
  }

  public static function isValidEmail($email) {
    return preg_match(gitUtil::$EMAIL_PATTERN, $email);
  }

  public static function getEmailDomain($email) {
    $email = strtolower(trim($email));
    $parts = explode('@', $email);
    if (count($parts) > 1) {
      return $parts[1];
    }
    return $parts[0];
  }

  public static function isFederatedDomain($domain) {
    if (in_array($domain, gitUtil::$FEDERATED_DOMAINS)) {
      return true;
    }
    return gitContext::getDasherDomainChecker()->isDasherDomain($domain);
  }
}
 
