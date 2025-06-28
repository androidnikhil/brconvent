<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'brconvent' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'LTdX+q$t`h8JEsj<KBgaq]Q4XT7,_z73aJnrc|P!X_0+]sx_D%ZmH>5{91}zf1|O' );
define( 'SECURE_AUTH_KEY',   'nX(ftb)MVD}Z4y8u<Xnystr|B75.?d-/bu2N@F3%qv@T8/}WW76fWDXQy!O^pu0j' );
define( 'LOGGED_IN_KEY',     '(~j0/-5i>zxBcvMDv_Pvx[3v.H@`$.r)8=X*oNH|e`*fe[@bJS,K)8Jty)n{Fm~m' );
define( 'NONCE_KEY',         '&2Z*x{Lit:clgRl/:[{X? tG9Ls<2KsEKhY1O7}rzZ R$rfBENy^#KZCgqBY$20|' );
define( 'AUTH_SALT',         '}Ze2Iam*$nvkOk@M$4&=[`^qc:CB-6C{x* [ID<5d,hCf.%yS&T4~de)8n/`@aM!' );
define( 'SECURE_AUTH_SALT',  '1Bq:b:,ovt}G.Q j.i4aGl#S6#HZ<j;7:?(-+ zUx>`+MW1IrT-_|%^Gd%Y1|W8v' );
define( 'LOGGED_IN_SALT',    '_ .EnXVxOO${[<novK/OUVT`O0cHNB9!GR+BKA@R.]V2),@mNE@sXFT%BLjoDZ!f' );
define( 'NONCE_SALT',        '2.PtQ}9Z4r+9liJDQ6Db;P1L 5pJ5.M0=?F`@DhRyI+bC)/z R})Y3W{WO:.oCnN' );
define( 'WP_CACHE_KEY_SALT', '77Q$*)+qh6[a|q@<j<o1<aV%JZbfdQ1ID>3j9B2hkx]8Je~@.0<lx^K&Yds0-J*?' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '2ba03992646f67b39d183c25c68db2c5' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
