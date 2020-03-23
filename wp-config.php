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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pisarnaDBtqiwc');

/** MySQL database username */
define( 'DB_USER', 'pisarnaDBtqiwc');

/** MySQL database password */
define( 'DB_PASSWORD', '1CNIWtk0F9');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'E<I7<^yq3{.$umf.$umfXQIfYQIB3>^F70>^zrj>^yrjbUyrjbUMF7UNF70>!z');
define( 'SECURE_AUTH_KEY', 'SsldVOG81WOKC5:|~wtleWPH95aTLD6;#*+H91]_-tl]_+xpiaSqiaTLE62]PIA2{');
define( 'LOGGED_IN_KEY', 't.+tmeXPumeXPHE6;aTLD6;]_HA2].+tmi*yqibTMEjbTMIA3{XPIA2;<*x6<*yq');
define( 'NONCE_KEY', 'PxqiaTLE6bTLEA2{.+3{,$unfX^yrjbUMEqjbXPIA3{QIA7<^yQIB7},$yr0>^zr');
define( 'AUTH_SALT', '#xphaSLpiaSLD5;]WOH91]_-95;#~xph*xqieWPHAeXPHD6;<SLD6;#*xt2].+tme');
define( 'SECURE_AUTH_SALT', 'SH6;#*x<*yumeX$umfXTLE6iaXPHA2]PHE6;<*xq{,$unfXQMrjbUMEA3fXPIA6');
define( 'LOGGED_IN_SALT', 'u{,$unfXQ$uqibTLEjbTME6{.^zrjcUMIngYQJB3}YUME7<^y73{,$vnf@vogcU');
define( 'NONCE_SALT', 'MujbUQIA3YQIB3<^70>^zrkgY@vogYRJFrjcUMF7}QJB3},@v}|@vskcVzskJG8');

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
