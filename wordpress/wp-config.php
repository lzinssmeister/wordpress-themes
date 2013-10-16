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
define('DB_NAME', 'lzinssmeister wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '%YIkFGo7rIJDe`OW1;PcL1],5qm~@5$l=umUe_=-uc=tD1kbU4<x@hYFrd4FlGa7');
define('SECURE_AUTH_KEY',  '3+@2yJH*2ED^jPp0]PS,i+8]wS?]a{};AR5+27~D]Ctv!tA>o>qL>^%k*+ApZEu5');
define('LOGGED_IN_KEY',    'TPVK?er4BS/dFA0%M;9?7e}7 R):i.Z8B4T}b9q9mC{Y_o?v]Pyb85Efzdme>*kz');
define('NONCE_KEY',        'a2,W|G]Uiob`qO&zX=}j eO)QBso,)e?( ((ae2uC*8hV*L.>0<_?a4F1)2sMs(U');
define('AUTH_SALT',        '57[._R=FOx99k[L$6j`jG2rZ[+_aQ8x&a3dw[*2@hYqHUA3m+M3Mqf08LQW3;9U!');
define('SECURE_AUTH_SALT', ')mbOt:k$P7iXuTr5v9E5<P^GV[mJTZGY:jI>1IvHBI}RTv)Y4[o2,`}O38UKw@ [');
define('LOGGED_IN_SALT',   'g^:>q|`/~v_O!<N9hf%E?Qa&7G9B0NrXou^e0R}KJX5fLb^D+C3RbfE@CDB/0HVc');
define('NONCE_SALT',       '!;.VLt|bzPG@&~Qx].:#-)M+ZOx;^ttB+BO_oBQosZ1|z0C+qgLW/1v<kF;f_yV#');

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
