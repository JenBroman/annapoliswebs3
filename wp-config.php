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
define('DB_NAME', 'annapoliswebs');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'c~ bn*urB6]wvRDiX$1>US`)5>F9Z*aZ~O;jCI ]DO?PUV=zm/75-d 4Y*(z}4<S');
define('SECURE_AUTH_KEY',  'AD.XnGO[isd.GYoBX8@Uc:WK~)kLd?Z!(TKhx6F^Z-v3B[pXN 1m~BL#fjsMW.+h');
define('LOGGED_IN_KEY',    'x@tL;#}>[8q[vGk1Pf;g%y@&fpzn9Rtt+)UZ|YE0S3bxoONQ&kcOcm^I+{M{YQ E');
define('NONCE_KEY',        'Gd!y5q/ -MS>WbGn26T}z<ai:@LQrGJsAg f!vIo{}+&KKk}YsIhNcBwS@-U}*9j');
define('AUTH_SALT',        'P8,IQPi:tBF-/4z==x#}*r0!P#Prw4;S`USr;ToP^4.rZ!HaU?uN$P2_]m.x>NH/');
define('SECURE_AUTH_SALT', 'ZJQWUP5-g#WJHytWE([n]SYM~Tr(eTi#!d%CvzQOg};>H8p4TE+c[z4/|iE~!yji');
define('LOGGED_IN_SALT',   'k<8{e.9,NB;/d?BX<SAHh;W1Av;^N9~[+~ev4&XSN#{lM>-m} Z#WF.rp7.Q 2@B');
define('NONCE_SALT',       '@?=^p6L;Ag-tSjg}{:3RiGzD8i6x8{5UxPjg6wsQ$#$X{%:SX(g|he;&EU9!mk f');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
