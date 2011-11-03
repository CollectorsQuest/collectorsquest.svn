<?php

define('WP_CACHE', true); //Added by WP-Cache Manager
if (!defined('SF_ENV') && $_SERVER['HTTP_HOST'] == 'www.collectorsquest.stg') define('SF_ENV', 'staging');
else if (!defined('SF_ENV') && ($_SERVER['HTTP_HOST'] == 'collectorsquest.dev' || $_SERVER['HTTP_HOST'] == 'www.collectorsquest.dev')) define('SF_ENV', 'dev');
else if (!defined('SF_ENV')) define('SF_ENV', 'prod');

if (SF_ENV == 'dev')
{
  define('DB_NAME', 'collectorsquest_blog');
  define('DB_USER', 'root');
  define('DB_PASSWORD', '');
  define('DB_HOST', '127.0.0.1');
}
else if (SF_ENV == 'staging')
{
  define('DB_NAME', 'collectorsquest_blog');
  define('DB_USER', 'collectorsquest');
  define('DB_PASSWORD', 'rM6aKxoKKwUX4r');
  define('DB_HOST', 'mysql');
}
else
{
  define('DB_NAME', 'collectorsquest_blog');
  define('DB_USER', 'collectorsquest');
  define('DB_PASSWORD', 'rM6aKxoKKwUX4r');
  define('DB_HOST', 'mysql');
}

define('SECRET_KEY', 'ipx$\"\'GQ!;[Mm`~X}wNat}FG#&S7}8C MsqoNbx/ii8,QL~=.I*BMlm>%i_` H>[');

// You can have multiple installations in one database if you give each a unique prefix
$table_prefix  = 'wp_';   // Only numbers, letters, and underscores please!

// Change this to localize WordPress.  A corresponding MO file for the
// chosen language must be installed to wp-includes/languages.
// For example, install de.mo to wp-includes/languages and set WPLANG to 'de'
// to enable German language support.
define ('WPLANG', '');

/* That's all, stop editing! Happy blogging. */

define('ABSPATH', dirname(__FILE__).'/');
require_once(ABSPATH.'wp-settings.php');
