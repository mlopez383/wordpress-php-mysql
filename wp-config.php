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
define( 'DB_NAME', 'lopezdataBase4' );

/** MySQL database username */
define( 'DB_USER', 'lopezmiguel_A965' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lopezAngel_A.965' );

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
define( 'AUTH_KEY',         '+e:^>#Q(qfE2N=A2M/0:pR>>I~ME(.N:8Ne?a,F%0&lSe8*)[>@xD[-/f!kf#*{j' );
define( 'SECURE_AUTH_KEY',  'Q0=w?Ej~6  kf$u(Jc`Ly-.PKx >0:$efC1R=/5=wk*VxrF&6-ynf.Kok#F;.0h}' );
define( 'LOGGED_IN_KEY',    'wN({zj|YRwEYlZ6@N(m#f<#CbTrM/LS3D=Qf:AfGr&FOOuoYi@K$`LQLFf{oOIvj' );
define( 'NONCE_KEY',        '|6+Sb0E:T?L>4 z:CY?-E6sWqLLX=#2:MB1TGg+`@%mF(5:+I oCh+@VjF;7]+9O' );
define( 'AUTH_SALT',        'f;ZMt?]L<3Z,jO/`Nf_I=3oc>kK;_y~9PCn*-AGP~8JOmH^ =xguZd:F4N!_L{Zr' );
define( 'SECURE_AUTH_SALT', 'Nt`$irk~U!,8Hm<(q$d6]zV9SEv}sy6gY`<W5/[>C97VA!W15Yg*bP{@tY[k>JB[' );
define( 'LOGGED_IN_SALT',   'W)Ur)z=WFTQ,pxG^!G,{ b{-W,^E:<V|)G/gk+x8m}M#]UYfvB=M@i}[etR1 80;' );
define( 'NONCE_SALT',       '%fJPclt7_*QBynEkrScc*SL%~ajpw):w4b+ 5<C=i=;4ZFo^^zl;E@+i`Xn)yBeL' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lma_';

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
