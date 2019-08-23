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
define( 'DB_NAME', 'architecture_db' );

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
define( 'AUTH_KEY',         ',Y_dDMv@Pl$)v1R}D_Bp7KDyyO_3Gz:P#--tBjE}(f9Q},&~D,|vw/rI:L KR_K)' );
define( 'SECURE_AUTH_KEY',  'EO,bvH1TY!<z!ibjY[&BSRY{2<)]TpF!ALi:f1e3MZVGdrIj;.01G291#M;CZiDX' );
define( 'LOGGED_IN_KEY',    'oHUy<X}jG(my|n;rZ3/1:vE]ID3jNk#r;Hqv([>?Xk_OU)^XTYO!t] *,/Ti}z{T' );
define( 'NONCE_KEY',        'N>#ND-n($id1KLn2}d -5WPrms3$nI-j>meJLyz| >}]6&E+&JK1P_)Xnnn92-]g' );
define( 'AUTH_SALT',        'Fodf_~L9f0`V68>FD`dsr`/&A.E/o HTv>@^;-D(Z-l:^Kpe)_.qc+}X#ZoY>{M[' );
define( 'SECURE_AUTH_SALT', 'hVfc:6USyQ>VX=>G#8tx^HY=A17mkcU}5E>{uophBiiYM?&aa.Jkjw9S=Z@Bb@d)' );
define( 'LOGGED_IN_SALT',   '!G5i{q#|7:18p.g_2qYZ2GrCR73+:5hnZ/-G_<2i~VS72g+>M=#Qqyt|)JO:8uy%' );
define( 'NONCE_SALT',       'uG^I7PkNEpf5at$!>X)<chZl)`]JiJXN/yA1r,DoAU7D1^]5Uh}>^02l=%dCBFwc' );

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
