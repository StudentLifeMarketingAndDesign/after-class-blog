<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ac-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'XR5Z29{zo{X[ Tb|LZ7C*.|e35xyP9-xM%e$Xm!VA PGsbleb~*D60q4P=sNz[gr');
define('SECURE_AUTH_KEY',  '.i!SD|t3!+YOvAad;mR,>m^2Wi5$.1`GQ_:G@a1l? 8~;j7vNGa>k@us-kk<JjeT');
define('LOGGED_IN_KEY',    'g1+5?>7N;U/li(BkUZm-,-hzbkmjJ.H<@++p|!*Ocf=yN%3A-IQII2C.Ktmpy[).');
define('NONCE_KEY',        '/CY@qTD+8u/W@%#/;$eCEHhhlGaqJ5c;~*XV(pS=E<x,>KUZe+)%_O/` tR2u|)C');
define('AUTH_SALT',        'hT0[R,cqH/XAc+p5)Hr~(rtqn|QK;qnfSoMjDZMJb+>Jt*+_`jlWT-3]a02Xlen)');
define('SECURE_AUTH_SALT', '<%);#&~: oE-lkN7Fp8MwD0%/L=Pxe))SK@:fUIth}o|ou@77m?9AO031gi@2|wh');
define('LOGGED_IN_SALT',   '~+ixTA)+aqw+$Mnw-qpg:p#yq7~9Pm4MN,/L]]khEu%2}Ul--P5V+g/ M)+8P`ZJ');
define('NONCE_SALT',       '~c!$hw}G2M/C)<nn@dysYaDC|Ul-+[s}H.j/IolZB%X`#|lWAHcGfaHxDx1CF6D.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
