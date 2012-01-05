<?php

class cqStatic extends IceStatic
{
  static private $_browser = array();
  static private $_browser_recycle = array();

  static private $_memcache_clients = array();
  static private $_memcache_cache   = null;

  /**
   * Get a Memcache() object
   *
   * @param  array $servers
   * @return Memcache
   */
  static public function getMemcacheClient($servers = array())
  {
    // Unique key for the $server parameter
    $key = md5(serialize($servers));

    if (!isset(self::$_memcache_clients[$key]))
    {
      $servers = array_merge(
        array(
          'cq-memcached' => array(
            'host' => 'ice-memcached', 'port' => 11211,
            'persistent' => true, 'weight' => 1
          )
        ),
        $servers
      );

      // Create the Memcache instance
      self::$_memcache_clients[$key] = new Memcache();

      foreach ($servers as $server)
      {
        $port       = isset($server['port']) ? $server['port'] : 11211;
        $persistent = isset($server['persistent']) ? $server['persistent'] : true;
        $weight     = isset($server['weight']) ? $server['weight'] : 1;
        $timeout    = isset($server['timeout']) ? $server['timeout'] : 1;

        self::$_memcache_clients[$key]->addServer($server['host'], $port, $persistent, $weight, $timeout);
      }
    }

    return self::$_memcache_clients[$key];
  }

  /**
   * Get a Basecamp() object
   *
   * @return Basecamp
   */
  static public function getBasecampClient()
  {
    include dirname(__FILE__).'/../vendor/Basecamp.class.php';

    return new Basecamp('http://collectorsquest.basecamphq.com/', 'api-access', '2sRqqP7HElFCjM');
  }

  /**
   * Get an Impermium() object
   *
   * @return Impermium
   */
  static public function getImpermiumClient()
  {
    include_once dirname(__FILE__).'/../vendor/Impermium.class.php';

    return new Impermium(sfConfig::get('app_credentials_impermium'), '3.0');
  }

  /**
   * Get an Defensio() object
   *
   * @return Defensio
   */
  static public function getDefensioClient()
  {
    include_once dirname(__FILE__).'/../vendor/Defensio.class.php';

    return new Defensio(sfConfig::get('app_credentials_defensio'));
  }

  /**
   * Get an IceSphinxClient object
   *
   * @param  string  $hostname
   * @param  string  $culture
   *
   * @return IceSphinxClient
   */
  static public function getSphinxClient($hostname = 'cq-sphinx', $culture = 'en_US')
  {
    return parent::getSphinxClient($hostname, $culture);
  }

  static public function weight_tags($tags, $steps = 6)
  {
    $min = 1e9;
    $max = -1e9;

    foreach ($tags as $tag => $value)
    {
      if (is_array($value)) {
        $count = &$tags[$tag]["count"];
      } else {
        $count = &$tags[$tag];
      }
      $count = log($count);

      $min = min($min, $count);
      $max = max($max, $count);

      unset($count);
    }

    // Note: we need to ensure the range is slightly too large to make sure even
    // the largest element is rounded down.
    $range = max(.01, $max - $min) * 1.0001;

    foreach ($tags as $tag => $value)
    {
      if (is_array($value)) {
        $count = &$tags[$tag]["count"];
      } else {
        $count = &$tags[$tag];
      }
      $count = 1 + floor($steps * ($count - $min) / $range) - 3;
      unset($count);
    }

    return $tags;
  }

  static public function linkify($text, $shorten = false)
  {
    preg_match("/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&\?\/.=]+/i", $text, $matches);
    foreach ($matches as $match)
    {
      $url = trim($match);

      if ($shorten && $tinyurl = file_get_contents('http://tinyurl.com/api-create.php?url='. $url))
      {
        $url = $tinyurl;
      }

      $text = str_replace($url, sprintf('<a href="%1$s" rel="nofollow" target="_blank">%1$s</a>', $url), $text);
    }

    return $text;
  }

  static public function slugify($text)
  {
    $text = mb_strtolower($text, 'utf8');

    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text))
    {
      return 'n-a';
    }

    return $text;
  }

  public static function isUrl($url)
  {
    if (empty($url))
    {
      return false;
    }

    return (!preg_match('/^(http|https|ftp):\/\/([A-Z0-9][A-Z0-9_-]*(?:\.[A-Z0-9][A-Z0-9_-]*)+):?(\d+)?\/?/i', $url)) ? false : true;
  }

  static public function formatUrl($url)
  {
    $parsed = parse_url($url);

    if (!is_array($parsed))
    {
      return null;
    }

    $url = null;
    $url = isset($parsed['scheme']) ? $parsed['scheme'].':'.((strtolower($parsed['scheme']) == 'mailto') ? '':'//'): 'http://';
    $url .= isset($parsed['user']) ? $parsed['user'].($parsed['pass']? ':'.$parsed['pass']:'').'@':'';
    $url .= isset($parsed['host']) ? $parsed['host'] : '';
    $url .= isset($parsed['port']) ? ':'.$parsed['port'] : '';
    $url .= isset($parsed['path']) ? $parsed['path'] : '';
    $url .= isset($parsed['query']) ? '?'.$parsed['query'] : '';
    $url .= isset($parsed['fragment']) ? '#'.$parsed['fragment'] : '';

    return $url;
  }

  /**
   * Clean a piece of text from unwanted HTML tags
   *
   * @param  string  $text          The text to clean
   * @param  string  $allowed_tags  See http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/htmLawed_README.htm#s3.3
   * @param  int     $tidy          See http://www.bioinformatics.org/phplabware/internal_utilities/htmLawed/htmLawed_README.htm#s3.3.5
   *
   * @return string
   */
  static public function clean($text, $allowed_tags = 'b, u, i, ul, li, strong', $tidy = 0)
  {
    include_once dirname(__FILE__).'/../vendor/htmLawed.php';

    return htmLawed(
      $text,
      array(
        'elements' => $allowed_tags,
        'safe' => 1, 'keep_bad' => 0,
        'comment' => 1, 'cdata' => 1,
        'deny_attribute' => 'on', 'tidy' => $tidy
      )
    );
  }

  public static function generatePassword()
  {
    $config = array(
    	"C" => array('characters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 'minimum' => 4, 'maximum' => 6),
    	"N" => array('characters' => '1234567890', 'minimum' => 2, 'maximum' => 2)
    );

    // Create the meta-password
    $sMetaPassword = "";

    $ahPasswordGenerator = $config;
    foreach ($ahPasswordGenerator as $cToken => $ahPasswordSeed) {
      $sMetaPassword .= str_repeat($cToken, rand($ahPasswordSeed['minimum'], $ahPasswordSeed['maximum']));
    }

    $sMetaPassword = str_shuffle($sMetaPassword);

    // Create the real password
    $arBuffer = array();
    for ($i = 0; $i < strlen($sMetaPassword); $i ++) {
      $arBuffer[] = $ahPasswordGenerator[(string)$sMetaPassword[$i]]['characters'][rand(0, strlen($ahPasswordGenerator[$sMetaPassword[$i]]['characters']) - 1)];
    }

    return implode("", $arBuffer);
  }

  public static function getAmazonProducts($limit = 5, $keywords = array())
  {
    require_once sfConfig::get('sf_lib_dir').'/vendor/tarzanaws/tarzan.class.php';

    $products = array();
    $keywords = (is_array($keywords)) ? implode(' ', $keywords) : trim($keywords);

    $cache = new sfMemcacheCache(array('memcache' => cqStatic::getMemcacheClient()));

    $key = md5($limit .'-'. serialize($keywords));
    if ($products = $cache->get($key))
    {
      return $products;
    }

    // Muting Tarzan errors
    $error_reporting = error_reporting(0);

    try
    {
      $amazon = new AmazonAAWS();
      $results = $amazon->item_search(
        $keywords,
        array(
          'ResponseGroup' => 'Medium',
          'SearchIndex' => 'Blended',
          'Keywords' => $keywords
        )
      );

      $i = 0;
      foreach ($results->body->Items->Item as $product)
      {
        if (!isset($product->OfferSummary->LowestNewPrice))
        {
          continue;
        }

        $products[(string) $product->ASIN] = array(
          'title' => str_replace('/', ' / ', (string) $product->ItemAttributes->Title),
          'url' => (string) $product->DetailPageURL,
          'image' => is_object($product->SmallImage) ? (string) $product->SmallImage->URL : '',
          'price' => (string) $product->OfferSummary->LowestNewPrice->FormattedPrice,
          'total' => (int) $product->OfferSummary->TotalNew
        );

        if (empty($products[(string) $product->ASIN]['image']))
        {
          unset($products[(string) $product->ASIN]);
          continue;
        }

        if (++$i >= $limit) break;
      }
    }
    catch (TarzanHTTPRequest_Exception $e) { ;	}

    $cache->set($key, $products, 86400);

    // Restoring...
    error_reporting($error_reporting);

    return $products;
  }

  /**
   * Fetch a page by the given $url and return the sfWebBrowser object
   *
   * @param  string   $url
   * @param  string   $encoding
   * @param  integer  $timeout
   * @param  integer  $retries
   * @param  array    $options
   *
   * @return  sfWebBrowser | null
   */
  public static function fetch($url, $encoding = 'utf-8', $timeout = 30, $retries = 3, $options = array())
  {
    $b = self::getBrowser($encoding, $timeout, $options);

    do
    {
      try
      {
        $b->get($url);
      }
      catch (Exception $e)
      {
        ;
      }
    }
    while (--$retries > 0 && $b->getResponseCode() != 200);

    if (200 == $b->getResponseCode())
    {
      return $b;
    }

    return null;
  }

  /**
   * Get a sfWebBrowser instance
   *
   * @param string $encoding
   * @param int $timeout
   * @return sfWebBrowser
   */
  static public function getBrowser($encoding = 'UTF-8', $timeout = 30, $options = array())
  {
    $hash = md5(serialize($options) . $encoding . $timeout);

    if (!isset($options['recycle']))            $options['recycle'] = false;
    if (!isset(self::$_browser_recycle[$hash])) self::$_browser_recycle[$hash] = 0;

    if (empty(self::$_browser[$hash]) || ++self::$_browser_recycle[$hash] > 10 || $options['recycle'] == true)
    {
      self::$_browser_recycle[$hash] = 0;
      unset($options['recycle']);

      $user_agents = file(sfConfig::get('sf_data_dir').'/user_agents.txt');
      $agent  = trim($user_agents[array_rand($user_agents)]);
      $options = array_merge(
        array(
          'cookies'        => true,
          'cookies_dir'    => sprintf('%s/sfWebBrowser', sfConfig::get('sf_cache_dir')),
          'cookies_file'   => sprintf('%s/sfWebBrowser/%s.txt', sfConfig::get('sf_cache_dir'), uniqid('cookies_', true)),
          'USERAGENT'      => $agent,
          'TIMEOUT'        => $timeout,
          'SSL_VERIFYPEER' => false
        ),
        $options
      );

      self::$_browser[$hash] = new sfWebBrowser(array(), 'sfCurlAdapter', $options);
    }

    return self::$_browser[$hash];
  }

  static public function getHttpHeader($url, $header)
  {
    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    $error    = curl_errno($ch);
    curl_close($ch);

    if ($error === 0)
    {
      $header = ucfirst($header) .": ";
      $pos = strpos($response, $header) + strlen($header);

      return substr($response, $pos, strpos($response, "\r\n", $pos) - $pos);
    }

    return null;
  }

  /**
   * Used for sending email when an exception occurs on the site
   */
  static public function exceptionNotifier(sfEvent $event)
  {
    $exception = $event->getSubject();
    $context = sfContext::getInstance();

    $env = 'n/a';
    if ($conf = sfContext::getInstance()->getConfiguration())
    {
      $env = $conf->getEnvironment();
    }

    if (SF_ENV != 'prod')
    {
      return;
    }

    $data = array();
    $data['className'] = get_class($exception);
    $data['message'] = !is_null($exception->getMessage()) ? $exception->getMessage() : 'n/a';
    $data['moduleName'] = $context->getModuleName();
    $data['actionName'] = $context->getActionName();
    $data['uri'] = $context->getRequest()->getUri();

    $subject = "ERROR: {$_SERVER['HTTP_HOST']} Exception - $env - {$data['message']}";
    $body = "Exception notification for {$_SERVER['HTTP_HOST']}, environment $env - " . date('H:i:s j F Y'). "\n\n";
    $body .= $exception . "\n\n\n\n\n";
    $body .= "Additional data: \n\n";

    foreach($data as $key => $value)
    {
      $body .= $key . " => " . $value . "\n\n";
    }

    $mailer = sfContext::getInstance()->getMailer();
    $mailer->composeAndSend('no-reply@collectorsquest.com', 'developers@collectorsquest.com', $subject, $body);
  }

  /**
   * Function to ping Google Sitemaps.
   *
   * Function to ping Google Sitemaps. Returns an integer, e.g. 200 or 404,
   * 0 on error.
   *
   * @author     J de Silva                           <giddomains@gmail.com>
   * @copyright  Copyright &copy; 2005, J de Silva
   * @link       http://www.gidnetwork.com/b-54.html  PHP function to ping Google Sitemaps
   * @param      string   $url_xml  The sitemap url, e.g. http://www.example.com/google-sitemap-index.xml
   * @return     integer            Status code, e.g. 200|404|302 or 0 on error
   */
  public static function pingGoogleSitemaps($url)
  {
    $status = 0;
    $google = 'www.google.com';

    if ($fp = @fsockopen($google, 80))
    {
      $req = 'GET /webmasters/sitemaps/ping?sitemap='. urlencode($url) ." HTTP/1.1\r\n" .
             "Host: $google\r\n" .
             "User-Agent: Mozilla/5.0 (compatible; " . PHP_OS . ") PHP/" . PHP_VERSION . "\r\n" .
             "Connection: Close\r\n\r\n";
      fwrite($fp, $req);

      while(!feof($fp))
      {
        if (@preg_match('~^HTTP/\d\.\d (\d+)~i', fgets($fp, 128), $m))
        {
           $status = intval($m[1]);
           break;
        }
      }
      fclose($fp);
    }

    return($status);
  }

  public static function pingWindowsLiveSitemaps($url)
  {
    $status = 0;
    $live = 'webmaster.live.com';

    if ($fp = @fsockopen($live, 80))
    {
      $req = 'GET /webmaster/ping.aspx?siteMap='. urlencode($url) ." HTTP/1.1\r\n" .
        "Host: $live\r\n" .
        "User-Agent: Mozilla/5.0 (compatible; ". PHP_OS .") PHP/". PHP_VERSION ."\r\n" .
        "Connection: Close\r\n\r\n";
      fwrite($fp, $req);

      while(!feof($fp))
      {
        if (@preg_match('~^HTTP/\d\.\d (\d+)~i', fgets($fp, 128), $m))
        {
           $status = intval($m[1]);
           break;
        }
      }
      fclose($fp);
    }

    return($status);
  }

  public static function pingYahooSiteExplorerSitemaps($url)
  {
    $status = 0;
    $yahoo = 'search.yahooapis.com';

    if ($fp = @fsockopen($yahoo, 80))
    {
      $req = 'GET /SiteExplorerService/V1/ping?sitemap='. urlencode($url) ." HTTP/1.1\r\n" .
        "Host: $yahoo\r\n" .
        "User-Agent: Mozilla/5.0 (compatible; ". PHP_OS .") PHP/". PHP_VERSION ."\r\n" .
        "Connection: Close\r\n\r\n";
      fwrite($fp, $req);

      while(!feof($fp))
      {
        if (@preg_match('~^HTTP/\d\.\d (\d+)~i', fgets($fp, 128), $m))
        {
           $status = intval($m[1]);
           break;
        }
      }
      fclose($fp);
    }

    return($status);
  }
}
