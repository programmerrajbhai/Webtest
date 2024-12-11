<?php
//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'PAEwHHU1lZpSLwOhNFacf6G0eq8Zwhu8s5u7AX2XlqmUluwbFB4qXPwquknYptbc');
//END Really Simple Security key
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
define( 'DB_NAME', 'lms' );

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
define( 'AUTH_KEY',         '.QR,(3bLuMyRV7=W7O9C7nPFWt+?7x~`}Tw|Jf:oGa>iKt`];n?!U:Zl(~&_y) U' );
define( 'SECURE_AUTH_KEY',  'wV3:8Io`UF1.>}rk!HAXE&z3(V3^dc>u5A5QfZ@t3Qd+S+R>4v}J;v/gw-7FSbw5' );
define( 'LOGGED_IN_KEY',    '!qX1^P^3$A)OO1]GL~io|UCw@o`E%j,0J;1#68myv(K`F)&^NpQ;3)vG/5]_h8lR' );
define( 'NONCE_KEY',        '>99a):f{CC! ~`iSO082luc//|f+Dkw8B,R<%n}Xj.WuPP}4-OG`q`?*6H)gVpIP' );
define( 'AUTH_SALT',        'eTNO)|Q(F;4UCj7os7qLQ+Q5gPU_m[r!c.CwpR;x.NFHX_q.Gbo@RKGb%Xr5L/;A' );
define( 'SECURE_AUTH_SALT', 'Y^iqY%wgH6NkeYxUs#Qj29@S_0dl?2tB?c@~NOU6MO[Rp!_}/c9Qu>FgAw+c5B~{' );
define( 'LOGGED_IN_SALT',   'i>|`UQxH{# m.O>WN2Nt|Bto*~y`NK)&!sN8[i6*K01WZi/H?$~Ui/?_9K1^pv@Y' );
define( 'NONCE_SALT',       '8X0+xqi?s/+^s@@+Y9D dliMWGr&iKQT3^sKuT+1+mz!Bq:pHue}hTyiaqZvm.B/' );

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
