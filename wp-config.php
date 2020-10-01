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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         'z{v3.swaz,6T rr2Arm/zBg_c6_w~W^S|{54[A ;UVYZ5w6tTpVfygtE<Trm@ID>' );
define( 'SECURE_AUTH_KEY',  '_o(%!,M)P4mCr-?`Rx?rC(`z4s *RDs?wZ;&5PzfXSZ&@4|e s$drni2&RK.t8a3' );
define( 'LOGGED_IN_KEY',    'Nshw7cn{uXb9cP,/-ubemtUeKZ_]yum~.WJya-cR1.:|k/bNwLmpI[Jm~$T-~1D5' );
define( 'NONCE_KEY',        '-$g[vci=KaLd_ym9WK)#=@,,SwRwQ@STw m2cFKNf}=6!r=aZ1^5Kp:=V(w1Ml4@' );
define( 'AUTH_SALT',        '_Ya~lsi)Y/I#U=^=*FSl#=x[2j.Kqj}2E.{u}V%@Sp!dCKN`G`:R_R2nM)|lE;s,' );
define( 'SECURE_AUTH_SALT', 'UWK?|EW[%-U(Kn%s{c78OU1/Ad!uI39RMUpS!sUpc9Aw}JB++N90{%W,*`(#!9;X' );
define( 'LOGGED_IN_SALT',   '?>vV4ZaTN}qvB:uC3R-bQ{!xI|9o+8Xe2c++vFwW0=r$Q~2PaluWr=)u|G)d~)]p' );
define( 'NONCE_SALT',       '.):}*d`~J9XbB+Uic`JW^8 bNUprX1f-RUZ1w)(~1Fx[{v>!admiA4rd#+2.y I4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
