<?php

if (defined('DB_NAME') && defined('DB_USER') && defined('DB_PASSWORD')) return;

if (!defined('SF_ENV') && $_SERVER['HTTP_HOST'] == 'www.collectorsquest.stg') define('SF_ENV', 'staging');
else if (!defined('SF_ENV') && ($_SERVER['HTTP_HOST'] == 'collectorsquest.dev' || $_SERVER['HTTP_HOST'] == 'www.collectorsquest.dev')) define('SF_ENV', 'dev');
else if (!defined('SF_ENV')) define('SF_ENV', 'prod');

if (SF_ENV == 'dev')
{
  define('DB_NAME', 'collectorsquest_dev');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', 'localhost');
}
else if (SF_ENV == 'staging')
{
  define('DB_NAME', 'collectorsquest_stg');
  define('DB_USER', 'staging');
  define('DB_PASSWORD', 'KC93pNXux7x4FP');
  define('DB_HOST', 'master.cwvkronpbfrx.us-east-1.rds.amazonaws.com');
}
else
{
  define('DB_NAME', 'collectorsquest_blog');
  define('DB_USER', 'collectorsquest');
  define('DB_PASSWORD', 'TYN9KJ76gpy7fq');
  define('DB_HOST', 'master.cwvkronpbfrx.us-east-1.rds.amazonaws.com');
}
