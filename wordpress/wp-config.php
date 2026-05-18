<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ordersystem' );

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
define( 'AUTH_KEY',         'i69S^v+D{JTYiKe3k0bqo7Eg&9Zit8fJ,Wofq/sI~u0yX19:0Z?eIyfMj4v>UC;;' );
define( 'SECURE_AUTH_KEY',  'Tzz16U-)0q0y:U. :DB0lic?lPLFic4gVERm+T6!;ab #oUQRpGrTc$wl8u6I3 U' );
define( 'LOGGED_IN_KEY',    'EXPMwn}y)3s3^I9>Un#[heb~t~B{lWiocef^z|7Pzb^@Jv_e&U@kx9L633g??{a&' );
define( 'NONCE_KEY',        '&#=is6cA]OFDhZ#@fe2|Cs9P6NOU*i^%k{EA0F`)MPx3]T GpB|xD3/qz&J?I=9*' );
define( 'AUTH_SALT',        'PLV0%Jl_pxF+V1.vk<Fq@:]yPw%=[rNv5g>V6`Xi%FCh!PHp;Yu5*s I8>b&P<Y$' );
define( 'SECURE_AUTH_SALT', 'DpJx;{5jV?wxpOm;c1z9r,mo>(-j-]XUEUUYwBJ^F~h|P1USt)kkk_w@zwV4^Bzy' );
define( 'LOGGED_IN_SALT',   'fuV%Gs4b/3U-n3gjZt~6MXO6iO4epFzg_8!@HRe `OSJkY7Sz1>TeLvfNuDB)MY;' );
define( 'NONCE_SALT',       'i6/<(g!t_^sDqt`}GrWjL6DgUE>uXWi0VrLD>7z|V;3je-_..#Z9-VX4SwN@SEq:' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
