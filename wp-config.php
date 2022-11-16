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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '$B =t13b{UyH>gOKzne<3y3DmofC=r4daGN X5knqjmE>_c$`=xKp]h{([{BGSi4' );
define( 'SECURE_AUTH_KEY',  'CMmD&2oWdOL#/$Wv8w|3omrb:-#sLXCM{9p*|=qehByay?kna9Nb[YrR4FX5%g7T' );
define( 'LOGGED_IN_KEY',    'LIr.-<kE}4rofZNg`mu#3`yUe*;pbWd9#CbTSwDY^YRA%X.kInA#T{+38KIk .=*' );
define( 'NONCE_KEY',        '.os/#|E~*{&()Z!2>OKMeli-9(!+<wGSW~rxbQ<azVs~u7B:A<e{vC^&YhI/AI0[' );
define( 'AUTH_SALT',        'CxO1RrT%^v3s/X:8B]6=[)56,?WJCZprmx1^P=T^?=k0I (+gElt& cR 8C$z0OC' );
define( 'SECURE_AUTH_SALT', 'qaelHIlcX%+hfIN}dsC0lLMwv15HhTEq<RZf{7Iq7%J@ehP(n1KDK&u:cobP)2e%' );
define( 'LOGGED_IN_SALT',   '>!2e_>Wmg6F!Pb*-/X0Ysf&zQd:[:<=}u?][?&Kx~mHVl+Q+-_inT^ssKGoAquOo' );
define( 'NONCE_SALT',       '=7Fkci6aKu#j^2}#`rx8jg8V_S~}wYb{Pw=*#Q1ZU% lzn nQ~h/df-&-dDeByF.' );

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

define('FS_METHOD','direct');
