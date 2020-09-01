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
define( 'DB_NAME', 'footballnews' );

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
define( 'AUTH_KEY',         '@-/IGaExL|QF$h,|q&GU~T7qC8:CLK7M{+= ``sIB[`c^BUFqaa#2E%%NEueOT?R' );
define( 'SECURE_AUTH_KEY',  'R:^s:9(c:2}Lfuw!4mBLX`8Eq-*fEe Ip6USjpy7Lr&r^jjA^v?i%b`7I_[th3C?' );
define( 'LOGGED_IN_KEY',    '$tZX{1E| $E2j&H=$j1jA%Oz[_i^~%pr-j|=4DDl,5w0lx`SjcYze#?)5d7*x|Qu' );
define( 'NONCE_KEY',        'O}]sFVJ2DFBrwTMWi;~MarlaD4s6m]:e {[t}3c~cJsz1BHajuW*L)- O%E?+qqG' );
define( 'AUTH_SALT',        'H=r:9+i7M=X3rZ5xok^s9g;6&OKf _.ZP3!uhAcyj_y{kc4A$v0`Mg1DCU_A;~29' );
define( 'SECURE_AUTH_SALT', 'VEBX&rq8-] K]dah*u*yfp]n`.y`b,LnODs-FzVy*qso30unI v6vMYOod4pRlxw' );
define( 'LOGGED_IN_SALT',   'cxi1?=zMVtD~t90_u~h_WD@OhdDd2xh(ua4Ba[4Y-K}Z?L7bz~pt@_Jqe->]]uho' );
define( 'NONCE_SALT',       'WaU;4l:b?5k!R!r<74pe_gMHI7F%d 7I)t+jH$GpV8RT0lfpS9ns3(OU==UZQ0~4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ct_';

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
