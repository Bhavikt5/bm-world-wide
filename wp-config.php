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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bmworldwidev3' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'i?S#I!dcm8Sm}05Y|rw7C.E4OjrOR@0VXJj*{DbSO1=L_G$XnC[5nRGHj/=pN@6*' );
define( 'SECURE_AUTH_KEY',  '01nnJTKd56VPxu]dg|GsmL6DROE9.^nF@iigad,CK($uY%;~M8xmm_HSX0hS=RBs' );
define( 'LOGGED_IN_KEY',    'q1_g)<UM-cZx,`tlgCG&baX{t@dWkMBsI]Mo{Pe2Q<gDj!aSN~@B4NA_wNM|m`1K' );
define( 'NONCE_KEY',        'W}ZB9OB&]LR*]b+(4nZ`Zmxx.<),13 +8&GYev-o*(%i;sS5sGM|FXfKP7(p9Mnq' );
define( 'AUTH_SALT',        '6UkJ_%cM.V,5A7oF{&A}@.[;x[gy-o${(aX~W1Qwp9suXjK_jA>a?Q=Z=%>BiqoH' );
define( 'SECURE_AUTH_SALT', 'dSlGhmx|z2ST]HS#[6|-.SP/Vx^jB=4B23rlg0j%/3PZ_%<.d)3x_hGTQ.+&$C<!' );
define( 'LOGGED_IN_SALT',   '4^?;9l~i>_Yy.?hi07~2P[~YT.&[>9GZu/vB[hf-;i4MDj5VbK3CkfbI4/%u-W=.' );
define( 'NONCE_SALT',       'RCG;tj(T1:],h0 VA%fPg*/;$^P#]SZ*#kBF5R ^lFeA]l]@!voT~FC$667Ih-O9' );

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
