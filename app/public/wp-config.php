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
define( 'AUTH_KEY',          'K?~C*Do>RzdJMiR!l[~Runc7F4xS`Jum![*/YhMfNFw^Brt>Z=!fD|pmOs(s~)u^' );
define( 'SECURE_AUTH_KEY',   'f]CwVmQlzgxTly73NzSj|A7z:KA+^w=#i1ok-w_>,*F=D*<6Z0m |xu1~_gk^UDD' );
define( 'LOGGED_IN_KEY',     'D|d!{z2Xr4#{Db0/b rOjK+Z:63Z?h*Fz4.`=t0h%<=.u1s`YcdNN.zBc|K]_G&E' );
define( 'NONCE_KEY',         'B5knQq0dg#~J2PZ@)5$1(`;T/1WMlu6*a$np>,VUfzSpwvF,gvttDJou![M8alD?' );
define( 'AUTH_SALT',         '~)JoDA<S>T4f5tc?m  )JM0Jx7W}MD5dxA1I0:5pt~H)J1|RP s8v_5dK@]c>r$6' );
define( 'SECURE_AUTH_SALT',  'E|vr[`mKTM eykk8ti$nyaVRI2)c^;8q|GcUaG9nXm+N`2>jVXI^}_akuUtU|Rj9' );
define( 'LOGGED_IN_SALT',    'Uf%,+` mxug;tY@=J?Ub=8?ojw=@^A)%IJ6B?F>UB^kd,:^dJIE]b;.B$2.xV/i^' );
define( 'NONCE_SALT',        'mN~XcMpVcsYA@c]6 8jdsEm[}mU*Eq/q#d+mUVE%x`a]:plP$AH$<@9uK=R/g>bG' );
define( 'WP_CACHE_KEY_SALT', '|<YK#~QaFBRN1|B$bWnzeC!,ZkG|^Jx,p,6h^TCGg6]9|1bUD.P>Gfau4hCdo5sx' );


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
