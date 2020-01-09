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
define( 'DB_NAME', 'auvawp' );

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
define( 'AUTH_KEY',         '1{a81C#Ktz0,Egk#,Ly@GG+B2^l>`>v]z?j0a]t!aSo:{]VCL{:o}QL6Hz!6R8s!' );
define( 'SECURE_AUTH_KEY',  'K~vD:@aY][$d]wr3<_MvmZOcdQJL5DZ^Bf5YY^Kvp!U!n4)BN;S<f}Cwda6*$F(Y' );
define( 'LOGGED_IN_KEY',    'SbyOhYR?k-Gsu^YD(gYH`[ry,%a&o7P:F!V*S;H0_OkiG*TM48V+k3)_CGNw[_5%' );
define( 'NONCE_KEY',        'JoP:/%n{lQ[C0i6v`=z`7WL2pLR+[*<O@_fsNm2y-,Qu)@3B!{efd 3C5U$Y0ze^' );
define( 'AUTH_SALT',        'EyUn)bJ.60oxZ*uUFD-#UtVp?uw37Id=uHjLM%WPbMF#f~wNrv0r!!9f`T*F2Boq' );
define( 'SECURE_AUTH_SALT', '$%gR{5[}0N1V&/Ro8?9UM^:ehr&zqZzXM#h3]6n__x5t>#Z3XY5rWc_.h>>dx{YF' );
define( 'LOGGED_IN_SALT',   ';?o_{=|`kmO%2M5Vhw6OzGEkUOv1;Y4k+DU<30pYs 2Sk?GyMkPTOH5ZSf,xoy7|' );
define( 'NONCE_SALT',       '^cr2S10b6b}tzTU^s2&eAt(S8@~K{A(A`]dquug`S+:U{cdXyan~Dc GBaRh/Cih' );

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
