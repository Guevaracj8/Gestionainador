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
define( 'DB_NAME', 'betq48v2oh5xszipp7dv' );
define( 'DB_USER', 'uqxqaoieqngk6grk' );
define( 'DB_PASSWORD', 'mjcYz0bZg0xPFZfHRMOb' );
define( 'DB_HOST', 'betq48v2oh5xszipp7dv-mysql.services.clever-cloud.com:3306' );
define( 'DB_CHARSET', 'utf8mb4' );
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
define( 'AUTH_KEY',         '%[aW)e-tK@{7_8m0CQy:j=mveorTj+sS]=hnF_)_MlJ<(wg7Gc6!GV;59q=Wtz6Z' );
define( 'SECURE_AUTH_KEY',  'v9e^gJr89?Yq=oHA2;TK 4@D}[4]oaV/KxS,A)e.`&S0GS##y1GfsGkgHs#87:7 ' );
define( 'LOGGED_IN_KEY',    'Vuub??^?x;=vx59kcWY&A^<ke?JVE65N#%24i#99C!^1#QaZ~*6ZV[}?:a~lm-QH' );
define( 'NONCE_KEY',        'v1J3;JX1NdNbaRB5g~?Ll{M,_,t-0IVCWpw=bR/us!)`PDqkf[&a4oz}<8@04mkj' );
define( 'AUTH_SALT',        'IPH2z0XhimpHc>[uRw2,?xr=KwYN:;# iU`$RSf$ GCN#]HH_[Gg#gtyOyI6G2dI' );
define( 'SECURE_AUTH_SALT', 'H4OtpGoFuuV}X|)kW28?sgvmoPSL3wNQ2#peL<d*HZz`UI vo<{kq~B(|wd)aCDA' );
define( 'LOGGED_IN_SALT',   '&0ESi&V:6a>8Lku94GRF[NS/tnRpI}HF4@X#4Y<^h/LcpR1BRz>Bp$N#f>g+/945' );
define( 'NONCE_SALT',       'Lc$~JAe3W-9jn*m/AhWuE&ptRZ7rws`H-mM0{f6{|zeZ5YqV_n1jFuG*^aHJ^}(b' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
