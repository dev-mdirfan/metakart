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
define( 'DB_NAME', 'metakart' );

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
define( 'AUTH_KEY',         '_riyp9*vSrEPM&&>]xL3cW4_Kw_!=$<=b&g]?66xI%0pq;~zWXD<X!{%Z< >6zuQ' );
define( 'SECURE_AUTH_KEY',  'ELSP5So[1N^k.SOQan=u8XF*.1d>>m$d_TG0V:*/]xBS~E2={KuAxF&O.?$?|x<=' );
define( 'LOGGED_IN_KEY',    'uIG^)eQOQrTABS4ZEe^*hhf1R<*YoqgW9ks*5LhO^)y6R|D!E._EifeOo8lI`K{s' );
define( 'NONCE_KEY',        'L?+o!{FygRC9L9=4?R1YA^p;|~-<&awAks#S6&bG?5qpMSkW`i}od8cBlaR&S=A`' );
define( 'AUTH_SALT',        'Z5uxhU4r|Rsxj:z*+*P]Zp|~Vgg<3dd{fl.]2et>;=a}y|L}[3r>n,yYiv1[.J%}' );
define( 'SECURE_AUTH_SALT', 'U$W6E&XyxPh[t/>|=Kgr<D9_;-wfr4L33TQB$@TBaXCtmN_`WpU6!YslLm{K?P;_' );
define( 'LOGGED_IN_SALT',   'E5#e*2^;35Y[TLD`.n= #7em3*eQ?PF?nTa{Bb`Jo?&eLa>iD@~jcVW[F1lFdDLc' );
define( 'NONCE_SALT',       '{Ea^;gv/&#dTE(&l@Wgjz/ME1U>tcdmwR`@Uv`g8u}crzOvY|83 7BEH!A+nK.Vb' );

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
