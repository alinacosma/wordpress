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
define( 'DB_NAME', 'wordpress_exemple' );

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
define( 'AUTH_KEY',         ':X2$T_k|C.@)]<bB^e~H%pd`vJKk{AJA.sm|t{i}Aw7_AJy]HIe1Vk-i+$cFblF8' );
define( 'SECURE_AUTH_KEY',  '$V{V^/9J6c?n1{!](geF&l1o587/&Q>fta7{diD`0G&hDjC06[-S2d;7u9#,LCQK' );
define( 'LOGGED_IN_KEY',    '%d&q.g++ISICV*1rWh2ycL8]scty49I4HciN>e<xW}sE<7[d0@)ph3.ceuy~a?A7' );
define( 'NONCE_KEY',        '*n~Xs&f/76qf$X_k}!_wHWs#0/*E_jg{[8Li|_=tK%WL#r]4_dsr|o2$;C:&e<{U' );
define( 'AUTH_SALT',        '%fU^Cp4[f~L<VnrdE`;OuiO+5/x^%{|eDpjXb0S$/:+`QJBxcz?F TSpaVMa]g&<' );
define( 'SECURE_AUTH_SALT', ')1 d+.[WE6{PJ/GnigEzfljE;qU]hrPk5sdH-8w!$(0NI4D;=->JVP. &h0J?E[ ' );
define( 'LOGGED_IN_SALT',   'd/V!nHAd8r9s9$lcT3qA:P=QK4Tf{8d2 /[TP=!(%+&OMsO;pm,^`?~eW( *QBB=' );
define( 'NONCE_SALT',       'uIh99*2cX6CM6$UFXYPa<#:T&Lo{}Bi9z@%YGobF_M1=:B%ICU@-qIn~/wJ/G[)y' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
