<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_36181856_win' );

/** Database username */
define( 'DB_USER', 'if0_36181856' );

/** Database password */
define( 'DB_PASSWORD', '84eh1GbChQ' );

/** Database hostname */
define( 'DB_HOST', 'sql309.infinityfree.com' );

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
define( 'AUTH_KEY',         'm PB[k!5{16lI-J][-k#Hn u.e/kb$*V]{MvEjxz+y`O5wf*8,hEq_;^U}|<<X~s' );
define( 'SECURE_AUTH_KEY',  'g!?tkq!Tmczok|mNjdU_f59Gz%Nl& p|<`m}TT3q4ggnBa}&_70pc-8[)r.yS{bj' );
define( 'LOGGED_IN_KEY',    '8C3!zV1S-5 @g0@n>mW{la8pDD(IvK/E T+hHYzNiU4%ZN[cFuIn65z._8>z9;^[' );
define( 'NONCE_KEY',        'FT{EF^Hmn]!]kPqX_,D_%3.T**Fx2n6gq|t/5)~dTamNV*D>xxn@(,k){`f;@C :' );
define( 'AUTH_SALT',        '@B$E JZVE74AZ!wLuPq-NSI!c{S<i[(Zo}4SLcdpukolJUi)-8y3^v>*PXI=*OcN' );
define( 'SECURE_AUTH_SALT', 'd(}$`:i=A5a/!*GBQG2jmG-4@eYMOxRr^RiWDY=5^5gykpkM8oe?6&DQ+qFp?3%a' );
define( 'LOGGED_IN_SALT',   '{%qvu].mwcf`Om}[vx&8{gk;8[ 61bu2DXHHo2spD@:g+fgBQ.[]./$gY&5H#R83' );
define( 'NONCE_SALT',       '+nd 4*/>dzShn3!)09OXu4?v}_uL~JQ630oB~P;Oq3g?]lq85xyf-.ACW&y#H)=%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
