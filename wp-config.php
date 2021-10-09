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
define( 'DB_NAME', 'zubu' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D;;i#oK/.pJ9/8NXC[vUz(<szlPi:j!]/({Yz^;i3~D2HDHDsK))NFF9<8c<Eh&B' );
define( 'SECURE_AUTH_KEY',  'kd5I@qh=T./3ts8Ppvb9R0L`Xu`Q!<K[<=T+O)5Z6L0dbTD0IoW.*q,N<x+1&5WL' );
define( 'LOGGED_IN_KEY',    'j3ixA?@rAfG,-04HH*~Qo<:F{<n[_T%fTkPM:)k$4X[o(go>9o=xaph,t2L:PkyK' );
define( 'NONCE_KEY',        '[_-|IPD9D2$KeN<e9Y#MG7L$4DwMZzctr*4:Y]D>($VB-M{pPs/fhT5Y69R{?lxv' );
define( 'AUTH_SALT',        'QN!-SjJ_E@jjwEEq_3oo:|a_]lx+FpCMu&rpR>7X-Ib_^K$;M1|K]jJ%9d5Z>LMO' );
define( 'SECURE_AUTH_SALT', 'TGwUoQiS%uBhHVCA0G}{U=x%~tOh_4P> %QTPM_w-diY>N1C(ls}&?%Qvz$1HT)h' );
define( 'LOGGED_IN_SALT',   'z&0k_[GDtFAkurbnYRhLK>#;r~y)gR$t|<;xXR6_~o(#0-R(~@RXKW0se~Q6FiLa' );
define( 'NONCE_SALT',       '~K]>5KC.0]1ee]E>r@!XA9,m K2g)!gbO1!UYxw[NFXX[#$EFs;U=KaPt$r/VXN~' );

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
