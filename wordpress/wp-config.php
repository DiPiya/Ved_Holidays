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
define('DB_NAME', 'vedholidays');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`b8uEp_Pizgn-VLi|zHX^-Xm:Q$upn5e+{oT`G3)B^~<o5n 6[+4Qg!T0+Y`@:43');
define('SECURE_AUTH_KEY',  'X0qU`ob>T=T$2}-we+b9>ZEFEi5]5u+82@*q|}6X:*GOi}v5]Re--2sqFD~_r8mY');
define('LOGGED_IN_KEY',    'nIxU6|e-h<*lO;RVVD}Gqs!HpGT|7ovfKAFr`c!>eFw#+mnP=/:70XZdW051d>lj');
define('NONCE_KEY',        '0M^#5eg6+MHqKsLb@3fRpV6K-k_b`(t}xvbM&VN5rvQX.!#m=z8pc!>+Z5oN-yh`');
define('AUTH_SALT',        '|CQ&L_MOVD:AI>^Nt->A4kHV@Blr|PRy`TR`wl|;1r:m+k*hs6?$w`YkxR.n!4x/');
define('SECURE_AUTH_SALT', 'L##T}Z*}$PC?w+$)7`[5*<hm#AT`3w}X2OK ?zM-QFFxl7Nng.~Q+KU`Wsf&+Zz?');
define('LOGGED_IN_SALT',   'gu|}skp5C`SA{G5{XF+]y:~e0H]+Q72YahiB #jRNPE|^vio |Q-^aKaZ0A+Hv&b');
define('NONCE_SALT',       '{%%Tc}-|ezVG/#ap8c.-H=US{yU8Qu*iG$bV-U=1`o}}fp}F8-FE^cZ Gh/ok1(w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vedholidays';

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
