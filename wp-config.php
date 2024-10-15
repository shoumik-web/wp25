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
define( 'DB_NAME', 'shoumik25' );

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
define( 'AUTH_KEY',         'QS)P|KjpBjDOqLzUtj,x3 M$D!];36}{5RW6Hu%9uZ>Ic{d9#8obIy@$LXaEJ?<2' );
define( 'SECURE_AUTH_KEY',  'k,wM!w9qw@0;y`g)e7Z~q hZ4yu5d}f|{L[p;:Hg(]~kBIrxkz[eCOefQ7bIl^ub' );
define( 'LOGGED_IN_KEY',    'p&;BBzqXHtsALMJ,VKNxis*Ng3BV?5uw;Gq*bX2_Awt8jOG`PR=F{Kaa;`_s@04s' );
define( 'NONCE_KEY',        'V;4*PwU#LOO3G$fy% |`i;sFKInMJ.1km6:aVI(Ye_#oQv0_j=$q:E;JnVn6R4H)' );
define( 'AUTH_SALT',        'hr8n)1553#O=FOKFchDEZB4xUkLc^t(?86T??vJhnu<5zwy;m6Wy!5:@{aU*B^vd' );
define( 'SECURE_AUTH_SALT', '0b$S6419QQ(2} 4I<Fo@rT!$Qhl{Os3A<Wc|45dc=v;RXL^BW82 4k<=m_caB{(w' );
define( 'LOGGED_IN_SALT',   '11-GK%t^)qzsX`~^$zO>,avit]^zG[M&F$(x+d9.FOv>IY=:n%3G.O;y# , }iC5' );
define( 'NONCE_SALT',       '(shsrLtGtqs[xYilKpI(5VEnBwA4o$$DH<9S5vV6&vtvxI6S Sl>~#(1f~1^{+|?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_shoumik';

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
