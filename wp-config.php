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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '#~6pnuvB dy>q5?*32Nl%hGf_[|^Mdez Q%Q>OdD`7fu%VP)+/>k_B-8VKTR<($`' );
define( 'SECURE_AUTH_KEY',   '5Z/7/o3)D#BDpVSP0T5WqbSwOY^.a[Z?a[C<mcC5Kc_y>.S[?MIlDn`>Yn1Ma1kp' );
define( 'LOGGED_IN_KEY',     '1RP7&LE._m;/6<9i8L5g*uh;P IId1`+M6X+q`D 0^gNl1@34p|(O^XzQxs+H-;2' );
define( 'NONCE_KEY',         '#yz(WH4sQ]IKp-C~!vYf+G%&Hu3Y|%OV:?=-948t x]jWypslR[-kKS)CPn9{HZo' );
define( 'AUTH_SALT',         'I.dEPCUE&1qI%EDfl>3{^WG3lN {>rov!2d[wN ./G8_V(VdoYweoSShAHUneN%d' );
define( 'SECURE_AUTH_SALT',  '%U_fdE`*jm/lt0|*zrBCP@[=p$!*9M-3JhQxC8o2dAr+|]N:k;_,<nEKG7m&A$<m' );
define( 'LOGGED_IN_SALT',    ';t>p(;2u?6(Wj$6kE8u0tfgnXGH]yAzBVc:fB]Q,-FL@:0lt,>8<1wL>N-W eJSr' );
define( 'NONCE_SALT',        '66%d>C7[w!`cJ~0CxZa_ySMi&.{11NN/HX_)-ls~+kT?6o<Pe4fv0Y5|h/@GO^Gu' );
define( 'WP_CACHE_KEY_SALT', '.JJ(ts&^j3ZT+m0[ZXm[XbcbDq7:H[QbM,$cI((nlAgA^UrGy-h{K }>]t$QA[v]' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
