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
define( 'DB_NAME', 'wp-sendigitour' );

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
define( 'AUTH_KEY',         'Sh~*J4flALfIQ.kfF3lD6&Xsro9!(t:iydDwDJ$/Lk<-i/6eKVqWepl[FHy)N?RI' );
define( 'SECURE_AUTH_KEY',  'y!iIxJ(5B<bf}(XC9iE7av(8SDrt/tuHf1!dsMW(|+BC3ujhCT~,;+J(gNNHB>=[' );
define( 'LOGGED_IN_KEY',    'KvK{a-XAP+R}Z+4AOM] KB!V(D,N<hhurD)c7,{Y9B,2$(IDwH`iHZm.1z.13*q]' );
define( 'NONCE_KEY',        'VW&r:*pXO<=^Hb$#]Lu,NHaEXQC3y/A:d&9;v3 PS3&g=CubA>1QNmy$,l_7K.^x' );
define( 'AUTH_SALT',        '`4r=KVd5u%cMw9;[+_jzLU#>_Q]uD2W,ur=oWz]*C*E9v+RqTPub9qOmpF#zhAHb' );
define( 'SECURE_AUTH_SALT', 'z/s]YN}K2lDy/mdJZ-V|D%joPG~$2O+!UZn9yhYz#+uq2u+J+YLk.n-Nb&*#Xc03' );
define( 'LOGGED_IN_SALT',   'oXRi%6=I69#JS;K0rH`]RP*lIk8p!)Yq;j9TeX8izNOy,%?vIH{z7OWd/Sn!l^Uo' );
define( 'NONCE_SALT',       'NMbto9]3L^.Ck-:EZjHz!k5EJ^gYzFdj(xx@Sq(4m)xq?%aIac}mRn%]>juwUz:K' );

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
