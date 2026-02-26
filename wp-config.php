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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')*0&dSPJ]N435c4:?s[;`gf7*!r|/oMEi}ORD9vl]E,1v$9pJncY67@u4A<RLY9l' );
define( 'SECURE_AUTH_KEY',  ';ak1pk1qnw:%aa~RUd_S>3e>EC5t-wZLf*`j `~Bqc/7-;(fl_XYp+3ptK1+n*Zf' );
define( 'LOGGED_IN_KEY',    'e)N-@-l(m^sTc?(TwXRr}2_(oVq*|xITs%Y?l]8e_PE>V8/A.E6,u*[}~ut?oM/Z' );
define( 'NONCE_KEY',        'qz40%pPG~nm-h4YE00u+PW*0P)_FBb<YB)KFFqO!Ju9bFZUVQ@h}l/LQ{h@)&|Z!' );
define( 'AUTH_SALT',        'TP`nc/M50} Xs#D{G4b)1VC2`<]K2j6hcMmTcxYQj?T5I10FT%D0.P%I@x> ]p,{' );
define( 'SECURE_AUTH_SALT', 'JK5Y/#Zg3[_N<D8hj4RmbihwtJC3?;Xq=i4)L(;VjgK<v(#i[0 Mn|JK/)H&6ME0' );
define( 'LOGGED_IN_SALT',   'q*#}tE;lo#HoGj9Ca]|,b+Y.~|2sHOyob>[(/ryOp0Ux`{4{1)wg6).xZR!|FX.&' );
define( 'NONCE_SALT',       'TQbkmiINLf<FlnMJXh4NvYb8vzpaA[=ESQYn;T^?7O8uPz=]s4DGdp05zd_&ht:4' );

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