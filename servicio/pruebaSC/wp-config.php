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
define( 'DB_NAME', 'servicio_comunitario' );

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
define( 'AUTH_KEY',         'FzX)*B^-^7BokXR=W0B-+e&_k:92!_^vfR[>s~OY1wi<QMz2|/1Z>iaHb$|)-^le' );
define( 'SECURE_AUTH_KEY',  '9gpmeINCe36eY(-s~ I[h5>QT!a5_aDjkG$H2-s+:oC@o= 7%3o;~kh!U.MV+#6*' );
define( 'LOGGED_IN_KEY',    'lFa ! TEi=x](lWMKVCNA3f#Kq$7,t,Gz+[5Sue9x=!Lh.iwL}]cKvW0_a*c%Tcl' );
define( 'NONCE_KEY',        'fd3^wYS^cW7 j5qemlDm8phk_tr2fY&@R&Ah5$>~xVHF_B!o;yInfe,M_-1`bkR5' );
define( 'AUTH_SALT',        'ziAr{Dki-Yb6H:sP)g,R:w7}*`:tA:D@Sa:wGT`c;2G;z2nz16Jl&+ABK%jx%v]a' );
define( 'SECURE_AUTH_SALT', '<:h0)9fr28oA9+Enx1Ct)w{VF)$ <{!SUczK`y)?E>GhpFBc0/oeH78~}6o`+QsF' );
define( 'LOGGED_IN_SALT',   '-nz?OQP}~0Ttk#-]V&6{NO,Y[^134u`$R5f#{]E4.c$=YAkB7@q-T0WK.i_z[CLX' );
define( 'NONCE_SALT',       '/&UOiL0{Fh!kdO_a$#LrtQFr}L) =er6%^-WtDhL}7X1I$}aIk-SZZku&E;~idVb' );

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
