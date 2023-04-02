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
define( 'DB_NAME', 'vegeshop' );

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
define( 'AUTH_KEY',         ']mFJxxf=_8R~)Au9=Y4i!kW>D=u=TqVnpDA1fD5p>B7*t2}eYLFL+rMS9$AGXS.c' );
define( 'SECURE_AUTH_KEY',  '#XS##cPWk,WZV{EnB=VrqAxbs#Ter|fVx1}F:FWp?@T{aRlp6:;I]d~Qy4F99GaU' );
define( 'LOGGED_IN_KEY',    'QPUZ@9qK%3tCg#`4[S7Ccds83h}1jS;G+uq6+iAB<%n=kx36enl+/PtJ<;Gbn?zV' );
define( 'NONCE_KEY',        '1!BfEfani&4qW>co_/Z:f&B*qZdS1F]-v*b~>yII.:?7,^@LE(x|ox@|b~pEC8T+' );
define( 'AUTH_SALT',        '=Eu(H&x$1LO^i;VKSzagx){Xdbe`8CkYv{I!?Z0S}m3B_!WH[hWw9M6jG5m?F+vd' );
define( 'SECURE_AUTH_SALT', 'Z~~]?V8~<X80plDL*kec$V3Wox3PqW] iN[]qdgFPDZKVO.c4USNYAWv],S1PAI}' );
define( 'LOGGED_IN_SALT',   'plL?Pl+oeSX7p@cu86`+%(B}%QQ;=%c1Uhf|:RcC9`YO!i]Zzzq6l%gd)9eJA[u9' );
define( 'NONCE_SALT',       'eiT--MeQ9#2AktuDTi6]Ci>4P|%fUSJ7]lhm4S iN6^[S%`1,-.,81u<#?kH:S9K' );

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
