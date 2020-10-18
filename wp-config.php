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
define( 'DB_NAME', 'demo_site' );

/** MySQL database username */
define( 'DB_USER', 'swayeb' );

/** MySQL database password */
define( 'DB_PASSWORD', 'swayeb#' );

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
define( 'AUTH_KEY',         '}`eeXGKPg!h[:0C>:Iy@?`_x5~jxlsACxpXTy^wvv!fvchv*ESv#l_wzw[T|5,#?' );
define( 'SECURE_AUTH_KEY',  '@LoxeR:{mENJzAIm7iu``|Wz:R;Bb{|H,[v^)_w-mcb1we$rLX&Ms:4i-$T<W$Bc' );
define( 'LOGGED_IN_KEY',    'bw$zE(&G> 0Ki!*2)kIb7LyYPmV0%+O:MkcYd8D3,@)_=M(9DH$UUk8pCB )nM+N' );
define( 'NONCE_KEY',        'Gz~iROwPq!b$_uSjSh/*6f`gM}~*njH(<E|XE,rm,6N.` E|xV!Pj)Gn*UqTTPao' );
define( 'AUTH_SALT',        'X:oD^twl&&bk{eW[+<t(xB8>2>x7Rmfg zEW}7y9@Jv$KTbCOFB0V1]gALqraKe9' );
define( 'SECURE_AUTH_SALT', 'CN+67Ju%e^8 eklotP#EzWnCh@~zuDh5xjlYOy1jCwe$1[iNvVtU,t;4KcK;g=Iy' );
define( 'LOGGED_IN_SALT',   '=Sp9Nd!UI0P-X;3L~LY1 |;#4FE`U!B33_*^6!MVjIhJ=Nw3@@)`]&?:0J[UxA~$' );
define( 'NONCE_SALT',       '5D*`}9o!=tFt]fU*#K|isG^&1ZRPB~]I7~ZTy@6?uGY+K=/_Oo.spi++Ngt<In?p' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
