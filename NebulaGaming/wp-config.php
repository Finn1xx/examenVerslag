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
define( 'DB_NAME', 'nebulagaming' );

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
define( 'AUTH_KEY',         '47${C&WT;^m]V4qvW{O+Cjv*lqMMCoB@qP}@AX/7E)bC+e}?:8+_o`XpAsfa&}${' );
define( 'SECURE_AUTH_KEY',  '`V|m_Y6nQqZ1h-VS*[)Bv<FI[R4)C@B&] TCo`(cUX[3%(9aAzw.eTZ-^-eGU$j!' );
define( 'LOGGED_IN_KEY',    '&_Osy]c]/Ey*1x;H|k#9(|BGD*9,an&B#X;}q00XGMS)-[Uy+crZE-u<_{aOL%jm' );
define( 'NONCE_KEY',        '24wKYdz1[%+E3?;SH*2,1==ytZdKdI7W9g7bp7XGJ(GR,J)AEE*rIx5x]CFHY<h9' );
define( 'AUTH_SALT',        'D^w(oixGu{V)hD)|<b!P<5wio6Te-WViXr85br5{+b|Tcv2@o~A-g{p?k(ajAXG/' );
define( 'SECURE_AUTH_SALT', ')RWia:KXW.>*BXMb2J5m:h!~PVLR8zK:H<Fv$0]R[+GS>q1U5(W-I.;+<[{F~M3f' );
define( 'LOGGED_IN_SALT',   'J[m#a+KN_T4ZRe4e `954i3R5ji^mBI)Is+4~h`nHxIB5GH|rE@tdv}OV +W^CQ)' );
define( 'NONCE_SALT',       'A6enPq660e5|g.vvY_$;=b!<TG]x(_^UtKb(MJx}YT),2%wycE|O5b1DHDVbgiSF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
