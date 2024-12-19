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
define( 'DB_NAME', 'P_ecommerce' );

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
define( 'AUTH_KEY',         '@TjBZ@ADOJ-x2+Pj7)Ogs&msJ|mQ ck(_X H6W&SoG@n|7~XAlwKcle}G.IiA&j[' );
define( 'SECURE_AUTH_KEY',  'Y([*_[8Qq0D/dAVHl(,j(_|A@q3$l nB+_f.QBXaq@xR<+]wzaHJ.vT@o1xR&:NV' );
define( 'LOGGED_IN_KEY',    'm&:R:2M*z7n&m.I$}?|MzunnbI$Z!*=Qf]&/v-t]A})Mx>-]:*9#4v#,<B?@QT(=' );
define( 'NONCE_KEY',        '6lapgiB4-yb^I8;EAG;`iYwLG@|,t7Nq#< _[v}~fz0jcT<Pu*lM 6l.ra_X%0xK' );
define( 'AUTH_SALT',        'e3W6??F8*FijYX{X=xtk{ND~Kkx<1,L-My}4t up9R&F5*@*3T(ZPX<-F9k69Li#' );
define( 'SECURE_AUTH_SALT', 'ZEIIyF;+rD:L7#V%J!!^e|.Y-x[Ap>!z8ufee}{m35Tn5!]22f_rvzQg+ ymkS,[' );
define( 'LOGGED_IN_SALT',   'ueoH03/~;1>kJ|tsm@O-S/;@od|a*W^5;he:}+}6hUHlP/)D&+E=Lnf5OD<|N7tI' );
define( 'NONCE_SALT',       'g]mpr&px`MD~UIJVOpED$87##L$0Z1!r./*uDu+C{6Xq`FqFr)C!Jv=iY[!o0~8x' );

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
