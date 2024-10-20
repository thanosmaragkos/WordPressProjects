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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp2' );

/** Database username */
define( 'DB_USER', 'thanos' );

/** Database password */
define( 'DB_PASSWORD', 'Thanoman7.' );

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
define( 'AUTH_KEY',         ';Tf0/j&Wj9)5)?(h%gXhu<9)~R#.#2?a0(f7(2@%VenQ:.qxBb>,j.7(PQ>|$8TP' );
define( 'SECURE_AUTH_KEY',  'D3Tt$|?AP<nGntKLFbjcwCYU9Nbtb(XmX{u0& 5eA^(fn/?r/]x%ZQa)RUkZ4?=P' );
define( 'LOGGED_IN_KEY',    'Z(lOmnl4UY5hu#-`w/?sKvz3,~wEGfUKGWX7Uo8h$:QE]-1qf=3a||0W-7k+sZh`' );
define( 'NONCE_KEY',        'A[YN|9^j`V.7HC#I|^0>h9NaJXZEZg20^z^|sW.Nq-?n)oiBHTf4.<Zqw>n;UJ,)' );
define( 'AUTH_SALT',        'L|~#tP=e:>NK!{5>TW$lau$3|#im}u;ey=J+d?fbR.t`w$MMo,#5Y-WN(z2)`()J' );
define( 'SECURE_AUTH_SALT', '0Kq~xwnQz#Bc2JXo+qS[pYNf+&`XW~)*kM$/`ypMrRw&DQ)+zstA{@x!A[;4xDh@' );
define( 'LOGGED_IN_SALT',   '4jP6x7v2kyziqp22<KxnWTulC<!^,TWvNVW$xj+;Q]=Z<@=R6=H`Wo#Me765YKgq' );
define( 'NONCE_SALT',       '.}j(XV#&E6;m1QImzM[?^|i~)aZ#*FIegdB^{=h5rjW(^5&bqy}gsftr{ !e~Z>M' );

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
