<?php

include dirname(__FILE__) .'/../../config/secure/wp-config.php';

define('SECRET_KEY', 'ipx$\"\'GQ!;[Mm`~X}wNat}FG#&S7}8C MsqoNbx/ii8,QL~=.I*BMlm>%i_` H>[');
define('WP_CACHE', true);

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
