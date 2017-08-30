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
define('DB_NAME', 'homestay');

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
define('AUTH_KEY',         'Hqe@0?WaoTfdT$4AP<o5&Lm;(,RxVF3@y{:4~E[3HfTT,Bc[=({$:[O05xP#^{Ez');
define('SECURE_AUTH_KEY',  '7sEY6|TUlolqf$8iJ^A]vukv4.y~?a$ ,Ioc]!rL{fWsFGRr]:OWhjo;D+=#,k A');
define('LOGGED_IN_KEY',    '~P>y4c*6zIhG{6B?qb 7wN?TIAs+w>F9OF%~stK2I,Z0jI-3be=U{25UWsE3l.{V');
define('NONCE_KEY',        ';;tyv;{ea*#Ojn( s_!<X`G]54Sj_ZrYOQ[]:U0FYLo7DUgA|vbi$|73vt_I!k2n');
define('AUTH_SALT',        '/:=6g&B.bPZH%:Xq~!h8Rkc)?%F SGBcm-}=X@}QEn]Xozk`_.*Uu?JbOtc).s @');
define('SECURE_AUTH_SALT', 'cEOKgDK7}I,s.XSn{_N/2l8uE-@AAvx`jg8Zdw0aaJj8z=tcvy=3/y*HJec;=&D~');
define('LOGGED_IN_SALT',   '30 >/7edzA&ywMdgA^#7G(`R^Suh0|8h=e!NG|h{M!x8sT}yaVszI!K<FrRv!tIa');
define('NONCE_SALT',       '+W,b+?]-g_3{F2TJ=3>$Jd[<)rcNn.i=NfP`gyoPRXNB|zd-QYU!@],IY78KjrA]');

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
