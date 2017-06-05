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
define('DB_NAME', 'wordpres');

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
define('AUTH_KEY',         '8aI#AB-(ONWid~ZxJWYTuI8_e#Ablu$Oy;Xf6Fc{lI8=}3>r(ncKu/([I2 ??3%V');
define('SECURE_AUTH_KEY',  'uLZJmbiI|Uub$9=m/rm@E?+|GpFP Tc=ufQN+9jMQ0<tqL@fk+DfK-#sPC~ 9AA^');
define('LOGGED_IN_KEY',    'K=k;pPCIS3--nl3e|LY9| Do#${raD`[|kHEH<nHG>{;4q%Onk`^,MS1&zy?u#iw');
define('NONCE_KEY',        'L^*,Aklmwuvh#]rO$L25!^%@*3XZeDyI|~36Ft1R;<*k7?eDSgnJDw|{EII]LV?7');
define('AUTH_SALT',        'J$}EuSF?PH.%F|NZ9/)MSHoasZ >oe:h&jlMkI)=%Rg.+9zn)M7,t:t@w. 7-j~5');
define('SECURE_AUTH_SALT', 'F=`$lflP~X:e)|g3l]H.D*%J+Q5;Vz%M!RiW?<IRfH<V4a^$Y pnsgG^`l1yCu9o');
define('LOGGED_IN_SALT',   'lU{dB[Uz(M$)!<_8?%yAL:cbedSusb.H.#@k:Ebj|D/^_i!27D{qdpWFl%>7D,B?');
define('NONCE_SALT',       'x21Iko TT2F gsw1e,+J|6N;j--ERfb,o@OKDJv}Y$GP;@S]L,ul=NY}ZZsK_X|;');

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
