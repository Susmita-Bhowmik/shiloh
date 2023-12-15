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
define( 'DB_NAME', 'creatyz1_shiloh_church' );

/** Database username */
define( 'DB_USER', 'creatyz1_susmita_dev' );

/** Database password */
define( 'DB_PASSWORD', 'AgZ;9[3q5oKc' );

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
define( 'AUTH_KEY',         'sSJAZSjcVxE!V)x]]%j<l%xh7p_pNNQ.|-8t#TZAQXz<GV9*QS^v{@7{kHo;1&-G' );
define( 'SECURE_AUTH_KEY',  ' W|6I?209tc(/LL$=njG}C)KQhBR^7}I`%$8UcytN^zaxjkP:sCht*?S~%*hWZ4c' );
define( 'LOGGED_IN_KEY',    'n<}wpie9qJut,lg<B.Qz^<#I+5[kG-6k]&9c@4KX*`USq639H-YV)THU`GY&[^gC' );
define( 'NONCE_KEY',        'zc6TDsq,LY:i$ik=Wi[Wwks:uC-4Q|*Qo|SGN?lwLY$#,%`^@i&d!6p[rR.J%SEc' );
define( 'AUTH_SALT',        'W{RQk`y<<uXK^%1.o=iaCI4(EiOXe/Q.Fco+P8Mrr.Kxy/<LkPDwLi!z<h?1UU/p' );
define( 'SECURE_AUTH_SALT', '6|F71^-xwa<k^0R&&OeDs_T7o?LSR{wUV?5miefh%[A%c$t,i75@3iI)SlZNNFE.' );
define( 'LOGGED_IN_SALT',   '6oiqeFJxIor~+y!I6ro$pxy+:BH_x;XqR.z}x>)EnFAw*f6:C[|4W^=Xl)_q?F.i' );
define( 'NONCE_SALT',       'z+~PRyulbi|La4!agL8ug; EdAKLAX;V8AVSZ?F}g78eD%49U{*isGjKVcd|ji/I' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'shiloh_church_';

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
