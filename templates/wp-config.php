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
define('DB_NAME', '{{database_name}}');

/** MySQL database username */
define('DB_USER', '{{database_user}}');

/** MySQL database password */
define('DB_PASSWORD', '{{database_password}}');

/** MySQL hostname */
define('DB_HOST', '{{database_host}}');

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
define('AUTH_KEY',         'b_^8`t)vm!mGb@xiS}EiK=4bax~9k?H;Jr9LYxrPSm_*U$V,^Bo`I&2|x9=yOPW7');
define('SECURE_AUTH_KEY',  'sSlOM#.|9s/t_..GhV.?kB/o5^sVLKU:;ezl9v)#u_2F12{d;8q7sE0b}qZEOJ!a');
define('LOGGED_IN_KEY',    'kw@@(xA<3a4P]Zp=>bUeYGfr) $ea=@<P$VG]V(s.*<6Bd/[.Pinay b_R=<xtuE');
define('NONCE_KEY',        'Hqs03-DYfswzw!=T`ub:wx?LSwDB^y)V@sJlt;)-WFFWk!&B.E@T,GPz[5>*yJ^,');
define('AUTH_SALT',        '-rIzBTO_3uDVx<NG3<yf~-vR_}pM:$fN08<6u KT_d2qn/!UH@b4e)8Av]fD|/s4');
define('SECURE_AUTH_SALT', '~hYV76(xu.[~$4HQp}|u|?2E>oj%Lo4)TL+pV5#SK_T/DyDyHT{_3UIJI`I~#01z');
define('LOGGED_IN_SALT',   'V5 %gY&^a8{0/pzq@:JMPl%w2 C1nf67s59HRJp!>+z2~gq2PY[(B|*k XL];yxB');
define('NONCE_SALT',       'eLYgPvYbEC)k%9&|9KXB&vTm:8Ho<9>nm:h0m2.V8[]g07|O`P})WI#X %z4Do!m');

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
