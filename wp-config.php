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
define( 'DB_NAME', 'kd.io' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@#3sO#|;~*/#eQIHoR){*T>SI9w0-0S~Z}S~)O#/*;|UlK1tr[w7/?cO_9EP/6rI' );
define( 'SECURE_AUTH_KEY',  '^ ~rc)a_t=*/U~XKEU_=Ai_B5J=VGvr*3x~M$O)e?v@l@Z/9P6H5y4BfwadOez#:' );
define( 'LOGGED_IN_KEY',    '9Y*?ALo1aVQ|mQ%r|*?<4PCU]&x1ix029W5?b`x-}0_0+8$T4-*N]4K6IHm3}M*j' );
define( 'NONCE_KEY',        'Z)d3kg63G8|#o[TD!jv1+@*KR1q!m@#:bEPf;~#_eLtHkX]Ww`fCQ~j+*TlwjMZ%' );
define( 'AUTH_SALT',        ']>KHy,$=^`j#,Lh-G(-BGTtRLs,fGYnC[%P%,%gRD](TjRHJ+ayRz:8YCne+BH*I' );
define( 'SECURE_AUTH_SALT', '?.]sF!$5pqZqqteVY~7&*VWE+RnIC(Js44*IltV=5<5HR{M85oD#wM}Eo_4hS9zb' );
define( 'LOGGED_IN_SALT',   'BX{`ZF- S6(}eu_a6.Vp<STJ;b/a~`D:)x%d|( z$7r2rXMHvGV|$u4)]o/m.iww' );
define( 'NONCE_SALT',       '{VeuC/,q-2$_rGN-Z9T4gO)Fu[]q-=!2}j_sQ {<s N-l<1O$mQ,)~LrPA-GUc7m' );

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
