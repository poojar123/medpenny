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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'medpenny' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<i ^SZ.?Fh#~^n(c66/6urI1nw!6sIE+P`gv5!r1mWbi$ZhWVFuZN0=fIvCF$=8 ' );
define( 'SECURE_AUTH_KEY',  '}rbW(zUu(9)%27 =edE$|CY0,0+JZh@NbpboG+M#ez![8}9 mtW3d,VEw&t6lhko' );
define( 'LOGGED_IN_KEY',    '=5z-=>xcX&,g*LGSXLS]FQ2 cwRhCW_&t.do?*kQ[!cuR<VR>#|[bXbB)jXgB~oW' );
define( 'NONCE_KEY',        '{M=024S;LzoFBy9yOzs|F{Mm*y4hHu`J8tHgFmqpP.&Bj,P*H3IMi+}/^+k|Y/K@' );
define( 'AUTH_SALT',        '&G/IlNRyhXL|tp~f_{G[i[l>O|MIOy%;0rih9^H+[2[u+JY?N&j+K,bVr;WmEgq~' );
define( 'SECURE_AUTH_SALT', ']rz~NM:&Zb;(u#*>pW(B13R0!l%pJjU F?{vAmm;o~w3.g752#q}&TNDi1.i0tdG' );
define( 'LOGGED_IN_SALT',   'u((]8[?qr*[QOS,ZyQo|A,Mh,ui]V`ktHKBhVBr!EjB +G8bS91wvym{~[UNn]/h' );
define( 'NONCE_SALT',       'kslXV+_CaluZztk-p+.Qh)sC>I97rdMY#H6qfd`4scAe tZD`kR!OFMH;e/IBZ]A' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
