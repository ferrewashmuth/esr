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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esrzbit' );

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
define( 'AUTH_KEY',         'I}4f{M/=5&5$4]m[U(w_Xdm-d:u6ytvR~(TO)4Hqt1>h #&qgoaz_Ok15{v&*8f-' );
define( 'SECURE_AUTH_KEY',  'n$J]W7>f1O.gxjs$8gRT&I|Nq+qE`N=+@FnIQy[m:M>K#[!]:$l5j.A!4mR^1!YG' );
define( 'LOGGED_IN_KEY',    '$F5:i)#1([3R`W}~B=.{f6#{Et%1i=oqIew/d=d%gmF$~!uW6JL&+DlW(oL(c->a' );
define( 'NONCE_KEY',        '[cz8fUw~qF}A+4w+^v!F`!ZTh/*;Q%?j$PEsWOqfxUA:a=1I!(?i}wGMFf1[Uu%S' );
define( 'AUTH_SALT',        'sAX~YD#PB+RQu[4/jn*-nKj.&Vitvl?v[zf}Ie#@cj@gI{mcR7tKMmT(Hy.AQpQr' );
define( 'SECURE_AUTH_SALT', 'PJdHedA5dX04-OeY;8*Hn[JA>BKmKzY)R`69=Wq1_2c[m)N`Iee#0d-]cEV5MJ{T' );
define( 'LOGGED_IN_SALT',   'EP^ryWm`G=VUmQ5L&x[0@&]o`$nX/Orn6nII6UFyq..L!I]=Dc.nkba((3,ZH&[t' );
define( 'NONCE_SALT',       'i(++/X.B`64bf}f*jOA}qs]OxE3Oj@qm>bdt&P}*p#v^Y`?LFT/5@0DAcmrH5B6Z' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
