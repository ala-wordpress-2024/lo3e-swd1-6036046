<?php
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
define( 'DB_NAME', 'wordpress-6.6.1-nl_NL' );

/** Database username */
define( 'DB_USER', 'Gabriel' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'jx%,7}+5&)M]7,}d7IyU}D;[MPi{}Rub1iB)>f58pek4IWD@1Nb1g!PN1QlusJ(M' );
define( 'SECURE_AUTH_KEY',  'C_j.)KX=PyT:pj,:;5Cs!L_@{[-B5ia-/LKUBG-Co[ag~*]H=qCG6VXEaG{fBTNe' );
define( 'LOGGED_IN_KEY',    '5X)>8So d9wI4Ev9MNI,#;DRGo{a6hcA8^wmh]?^DfrgIl&E,nup:u/%Oojj.S4B' );
define( 'NONCE_KEY',        '9$EN:m#U6vy3co,{(7Mk&4[IS8}]zJNx-C|1yUAvcp2M!FeZ8<W7+CMH5qC/!xpn' );
define( 'AUTH_SALT',        ',8h=AmRtz-:`#M{@nZm,gAr<5dg<D!Hwo{/aGd#5fJA>):d<1>GVRuTe`X*^f6(5' );
define( 'SECURE_AUTH_SALT', '9?YaM>/F(g3u}_&sH$nJQb<(yrsGYn+<AMFc}8JyhCAOd&[<XN70:Us@]%z[ic`X' );
define( 'LOGGED_IN_SALT',   ')_>[`N_%bHNlDAUG@DH-v5RR,,6E]9oU3W_T_tW7#}&+qI-sx}3TA-Y:WsSQVa=g' );
define( 'NONCE_SALT',       '.`PsH[0?[ERO$[B/-MlPr<%B,MN??P<q]GK>r@(g]TtnCAe?cvNHu<b2O%I/[BYO' );

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
