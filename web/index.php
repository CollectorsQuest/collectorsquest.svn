<?php

if (extension_loaded('xhprof') && mt_rand(1, 100) == 1)
{
  xhprof_enable(
    XHPROF_FLAGS_NO_BUILTINS | XHPROF_FLAGS_MEMORY,
    array('ignored_functions' =>  array('call_user_func', 'call_user_func_array'))
  );
  $xhprof_on = true;
}
else
{
  $xhprof_on = false;
}

require dirname(__FILE__) .'/../config/bootstrap.php';
sfContext::createInstance($configuration)->dispatch();

// Time the request and send it to Graphite
cqStats::timing('collectorsquest.response', cqTimer::getInstance()->getElapsedTime());

/**
 * Track requests from the top search spiders to statsd
 */
$spiders = array(
  'googlebot' => "/\.googlebot\.com$/i",
  'msnbot' => "/search\.live\.com$/i",
  'yahoo' => "/\.yahoo\.com$/i"
);

foreach ($spiders as $name => $pattern)
{
  if (stristr($_SERVER['HTTP_USER_AGENT'], $name))
  {
    $ip = cqStatic::getUserIpAddress();
    $hostname = gethostbyaddr($ip);

    if (preg_match($pattern, $hostname))
    {
      // Now we have a hit that half-passes the check. One last go:
      $real_ip = gethostbyname($hostname);

      if ($ip == $real_ip)
      {
        cqStats::increment('collectorsquest.crawlers.'. $name);
      }
    }

    break;
  }
}

if ($xhprof_on)
{
   // stop profiler
   $xhprof_data = xhprof_disable();

   include_once sfConfig::get('sf_lib_dir') ."/vendor/xhprof/xhprof_lib.php";
   include_once sfConfig::get('sf_lib_dir') ."/vendor/xhprof/xhprof_runs.php";

   $xhprof_runs = new XHProfRuns_Default();
   $xhprof_runs->save_run($xhprof_data, SF_APP);
 }

