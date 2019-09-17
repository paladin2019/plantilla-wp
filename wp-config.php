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
define( 'DB_NAME', 'prueba_romel' );

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
define( 'AUTH_KEY',         'bQrD{#(NS/sbZ|0qq.AFRJS(wdh2UEG&^oxE=u- @^0KmU(4#*0LwlPYcVLmO:]<' );
define( 'SECURE_AUTH_KEY',  'ISsK&qlg-A2lNE`-V@$:,_HUR`RlXyCS[|j>_@};?|QKdZ8iHs/u=c?$TG|aXa=>' );
define( 'LOGGED_IN_KEY',    '.N_KQZMyZWsJX,>ahtx+|iR3_fCx+tF! )tQ{pU{C+?bs%SZiXJe6oX71dS HOL2' );
define( 'NONCE_KEY',        'h[?k/o#d`/hM{Te=lawI7<6KjGl 77H^JG&plJ5zZAQ[UyDV1f>-e<+Pz[O5vVkl' );
define( 'AUTH_SALT',        '~#hQdGUu-]1LKc `>B8C=Yf5U%[ 9,^7zgWpc*^Yok}xy:,(XnnMXDp-KGSEXEK<' );
define( 'SECURE_AUTH_SALT', 'NVQKRS;V`XO^-ts@,z]pR~}/&N!}z3Gm7&#5JFWE(rEyfJy.+Vxl~@>YEzfdXHj9' );
define( 'LOGGED_IN_SALT',   'gk6Ks`pBrrovk2d`@9lit-Q`}*5Qk@TbM!4:b&6rHq5a*3N:2WP4nN?7X)cb_E8h' );
define( 'NONCE_SALT',       '+I@fAeLwsc*_.#KFek2]HO%!^|/EL~L^7]R>s {-]oohlCO1Nd?j|]g$AbYHv4{{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_prueba_romel';

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
