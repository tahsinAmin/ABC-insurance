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
define( 'DB_NAME', 'abc_insurance' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         '^}P^XshLt!*%uS$e&FSny#)*(@KI%p!WB%in4g}inUGE^/dKCh{t3jqQk+q7o8-<' );
define( 'SECURE_AUTH_KEY',  '=nrbWG7DC<5$)KW#)cChN4?2q=Y|vU%Rp=WxbZ$Te9vwmnZ#bt0uAX*C^h{.WMv>' );
define( 'LOGGED_IN_KEY',    '=lbV&>|,!` T4A-c01dDx7;_t~+lTid=6Mfnce^Z`m[./ Avpuw6qFhhS?c#~W9!' );
define( 'NONCE_KEY',        '9H`L%L36xgBo8:ABGh1|R7+^:bcjyxTtoN5eCQ-8{NSy<b+^vqxY2<AE*1m*]|zE' );
define( 'AUTH_SALT',        '}`TqdMbny+[VE6L{(yZ3CM:w0d=CG/=0Y=CMy$#UenO&N~+EXVDi46u:F4 5UL8m' );
define( 'SECURE_AUTH_SALT', '_.*+SP|4S.RT3X1Y}/w{y(@?Hi~pF@)Hn;m;Dku)>L|RKdCj^~LTPBY=:U7Ucfs2' );
define( 'LOGGED_IN_SALT',   'qw(b<5zX}Kn9l[@HX. ./L3[%#<yID<OIv&b~DC</?mk`v1_$O3IKCtj]SV& 5N}' );
define( 'NONCE_SALT',       't7gL,*ToApj7L4KCj<T|JHR0Pvmj{unHlwG94TI`oX<1%%@bv28e;lu_a!4PPwyB' );

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
