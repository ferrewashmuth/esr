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
define( 'DB_NAME', 'eesrzbit' );

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
define( 'AUTH_KEY',         't@Q@dMWmeTnRNmT1gGaI1&IR}6kDz+1TA2_&xlf4KX#=vj+>we_Y25JE|vMLZ}D[' );
define( 'SECURE_AUTH_KEY',  '4y:W4/fCLcRkLkHu!vj9%oE6k_oe)1!]O{Im1^1}1Y{Kp]o/PxpSO&pkEQRq0&}]' );
define( 'LOGGED_IN_KEY',    '*Ubcilw^`m9cHn4I/(REnpz4mBY=Zl-=d=m8Bq{d6m[Y)mk;:B*S8>LJOoP<+NGG' );
define( 'NONCE_KEY',        'pMjqlZ<:pBC7*%zrgGvdd3HLfw&Gat2daP&>}ZH6+D{G]NF5UKzQvUV80EQuseQ~' );
define( 'AUTH_SALT',        '%LL-`/|HNFh73u0d8Y#b2k`eM]^#fw<K~09KDFS|k,ml$powcf~~mto}VIFY 1(/' );
define( 'SECURE_AUTH_SALT', '21|O._r2.C$B/!Jfs <R!bbN;#{!2o>&}sQN zpI]Y65G&9{P/a1.5B(8aUC?]cj' );
define( 'LOGGED_IN_SALT',   '*u>AYx5]!jLr)!0Krr}8!4z./p}}=+E*&DX;_`b%7K{#Fn[xuL6-]nv87/ :5=/=' );
define( 'NONCE_SALT',       '.;GIs6yD2,8TmwiYNsQu.kw}|T07bw)e;JD+%7s>~*(}Wf4)p%CQ+^ O 28-{7_b' );

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
