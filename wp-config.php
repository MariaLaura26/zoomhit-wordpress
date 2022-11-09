<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'zoomhitskins' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '((kEZKlT}9OLME*X5W1(0>rm=xd<=u26vjGo,pShkgi923=/f[#;Fl.r?d:7x;Z0' );
define( 'SECURE_AUTH_KEY',  ';OylwpLpUsR,bHJJ:(X.cWUV`xqg-r9)_d_<e|veC^3|GO$z:InMq?{V^DT7aOjY' );
define( 'LOGGED_IN_KEY',    '9--Qu`jO+XfOp_a`x+nyKwtiEr:=]L4^SyU#Bg,($](F&,7X6E;Z%h$bFIu5vw%f' );
define( 'NONCE_KEY',        'Tm/D,-?L5BZ/KB*RaNPSIi%1oIBcBPH~le-i`_*;PGsx|]F5VodNr[smW7=Vd$1!' );
define( 'AUTH_SALT',        'i*%80GDXjbDA>_njKsWn|DP|;ynPUGBA-{<wl5N_>[&IE9cOt_AEKoc:sU&n7m;7' );
define( 'SECURE_AUTH_SALT', '8O} J6ZMK7*}D$-mzXq1gn2 O_T_uKO@?48VaU^2A!-UMxeG8M92LQ^vK!H$9<+p' );
define( 'LOGGED_IN_SALT',   'xwJ=fL=01?8RBZ2^uLxxP}IEN><mArd_E3C^r4/t]<e}vxuh*ItE1x9;)<FVy)mv' );
define( 'NONCE_SALT',       'J[aGz!:?2]{^.%Dmk~06!(l00d>0aqGJ#0[,YCNFTzB-*Gr|0S+N|CJ k!w1%_t#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
