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
define( 'DB_NAME', 'testwoocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'plop' );

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
define( 'AUTH_KEY',         ')L.h1:U<hX/(*3%OVKm5+9|[^2?~qoFkreo/,L|37AQw2Y3B@ZcYaDlN?cz|5f{9' );
define( 'SECURE_AUTH_KEY',  '3||X<-DrrWF{wBMj{(%3:l,vSo+Qj3.&:ThJN}HK%D!20z]vugR!.k:0px$`<`7}' );
define( 'LOGGED_IN_KEY',    'Q=7#YEpGoDHF#nxTx&2$LPo0IPuhA)R<R{6]06UyW/(<,;]P~!U_r!&N*6TakioX' );
define( 'NONCE_KEY',        'Jy!;b@t]{/XM1T%l(#$l5C?BeE6wc WRr$vGf+W/4TXj5>})Ao_pSHbq`HUV(r.f' );
define( 'AUTH_SALT',        'v[ #!A;j`W(T2Bh?{5M[{exHY,UD1!_;t/15[Pnm3JPRyex_Om|r,}d1EJAKBqUq' );
define( 'SECURE_AUTH_SALT', '^U(6TiC?2&yJD)&Y;SEh%}*daY=o#)lqbURAX T`}A}X?0Ol;_9Rb|sq1<gcsD3]' );
define( 'LOGGED_IN_SALT',   '-5$HS9!_F)jBjG$VY0#{9}iB=%Yu(^:Mv0DLSVoah6]5GCo3#lt!`H%Su7MSc&z`' );
define( 'NONCE_SALT',       'M; H3h-fRR!F+Tt$eKJ,Bu{65i#J1ae[EU4)7Nw1dQZfO<qfWj*Ia4)/jjWm2L@W' );

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
