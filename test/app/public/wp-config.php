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

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);


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
define( 'AUTH_KEY',          'C}X8JX?! S5r{x]+zJx{-%!^ yWlCXieePUA~37w{$|iC3%=A<[$D@MrKF5u^[a%' );
define( 'SECURE_AUTH_KEY',   'jEA^Fi`uKa%]>lx5WUpZC},5}Dq*>o:=wbzu$aMnouDc2YLWF9FG&}YINC*S3Kl2' );
define( 'LOGGED_IN_KEY',     '!H~L2m=yi-br2zH8$c2b)0^vOa8C^xmlRmD$C]]/%p@cVt.FXDU7hIGTxKc&lTlH' );
define( 'NONCE_KEY',         'E<YoE|rtw|%wc#Wu8noz~!&^x{/y$m T_ y>5wuw,#wY1c>s?]}S=G X/6MsMmdG' );
define( 'AUTH_SALT',         '-[.EnG#rj,Q8h$G7$Z_FES!D^MR&kE>43}+#>Ive<1_>Lh33A~y$sM< !8mio(ze' );
define( 'SECURE_AUTH_SALT',  ']h)DBN8 Vv&ZsC6*,&2exyBs412H:wnS)WwMs7;bz{);jtL{^m#lsVYUxG^0O_8N' );
define( 'LOGGED_IN_SALT',    'xJqi`cd/O2;+*8f3.}0+H}F|%*lnVv(PsLX;* 9&z6n^6;D_M*a(I%3*WRTkQ~Bf' );
define( 'NONCE_SALT',        'ili}4MNq<&/uK456|3wB/%M]u#$R/(hgn*ezV>bpY [m~7|jX}L)516r%=}5L|SE' );
define( 'WP_CACHE_KEY_SALT', '2.9R_e~JL~ViuOW+{yhf>5k2BUyi:,`Rb^IIt;26[ =c5as8(;SE(z#%>&xxw5-P' );


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
