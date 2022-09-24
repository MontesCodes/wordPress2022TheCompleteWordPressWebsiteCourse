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
define( 'DB_NAME', 'wp1' );

/** Database username */
define( 'DB_USER', 'montescodes' );

/** Database password */
define( 'DB_PASSWORD', 'a' );

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
define( 'AUTH_KEY',         'JGA]<.9|Mmd}~<3GnX^=C`+ZyW.mF]ngN;TwHCkC$b6JsFT33w_Me$x!REd=tUD&' );
define( 'SECURE_AUTH_KEY',  'l]?~B&3vt6s@kM^dtCZeezJX]e}]~h?J!w!P!EI4Y@m;o3%n8-*SFHkF9ynL)WH[' );
define( 'LOGGED_IN_KEY',    'L*AzUE!; a2JyD`.W 6Zxfd.if-DfJ=uc3$adEd<NV*^jTq[1qYp8:U}v|_cnv^B' );
define( 'NONCE_KEY',        'm[i8<<mu9DRl,S@nCIphx=pnmV$>EBpF)Lh&[`E#.75^W%X/V)<xYAOt|?XY[O+j' );
define( 'AUTH_SALT',        'dw@<!A^dtc_g,y0m$H216pvAqYY 1Oi,o/q+/}*|FFWk,5z*-{(0KnS4FdPrQw,9' );
define( 'SECURE_AUTH_SALT', 'U1FuHFS$XeO)q^?zG2HIzbZMT*!/:xkOjYK<X;?Tem=s,Qhmup?c$`@O6[C`^y9L' );
define( 'LOGGED_IN_SALT',   '<0fojqHrqEny5_.H]COp#8>yHF[eV4W0W!~4R`O)~Mom_1My=m)IM6W!Py|!0r<5' );
define( 'NONCE_SALT',       'YxSuz#>pZnVGw3lf`2~Q,?{HyVCfI,i(>V,KkbjMbLO:x2lQ9GRAx!aRt5e:]pT>' );

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

define( 'FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
