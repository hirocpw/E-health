<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'magic4');

/** MySQL database password */
define('DB_PASSWORD', 'magic4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'qUEFzVLw>)/Q*mm*CfHLXpK?0oGO sy ,F%<Pe+P4mT}7]n8eP6O!93ASmO7r~>f');
define('SECURE_AUTH_KEY',  'U1~|9hEHNGyPN!~3H)`a>(C2{Z1uI1+ZHxZeVs4;19@&Gs%BL}MOVdN41f&vJkN3');
define('LOGGED_IN_KEY',    '[>7B-MzT0o]xn4GDf%;I8/!:qqw]b}J5Yrf|Y/u|A+BeW7ZH)qBj9DV%!A,F%T~#');
define('NONCE_KEY',        '<)A^bt?GxwYDUCHB(08jcbHd7uxyy E4{OQ4U2Jn[aM-noFL&a>>-}x>B gh|$GD');
define('AUTH_SALT',        '@.$M`LGFl,^};%y>M7X>81yn*dA_,uqSVI^<&Im4%*O -/U;&^[HDm,#X)#88=AO');
define('SECURE_AUTH_SALT', ',YPGnnD_= iNjD00U4|^S^Y(OI,UEa1@XLYZ=C c]$^):wq>U6Uec|Or51|L5qg/');
define('LOGGED_IN_SALT',   'R/`tO4YfiI]l%9$V}iQ~sNWEcbDjE )EeDpFLBT4Ii.{JPT1>X4YB3>![:N~#>*.');
define('NONCE_SALT',       'v%<$~!CxmP@/(:Muy pyEYGU%{f^ajd-@Ull+y|mITS> AZ9IzvK!ar}|};$O4s3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
