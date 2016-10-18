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
define('DB_NAME', 'padebooks_db');

/** MySQL database username */
define('DB_USER', 'zuhra');

/** MySQL database password */
define('DB_PASSWORD', 'sharpy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Kp/y#C2EuUOG}w8p&O)8V4kYa^-5h/NRJ*[S{,]{D)7Z;{%sJWkGq*ADSivsw*&)');
define('SECURE_AUTH_KEY',  '{EJH ]`)Y=(:f?|b6YM.!kU<rt#=@Ak`w_A 5m 1gDg}~7QPN[!U:cM{4!-T6sJ1');
define('LOGGED_IN_KEY',    '1xzKMM:D8/SJ=]:D+Qup|zOhKAI_/P3Nq^^H<)$D::EwBG9wm)(5Gy5RmzCw!gN$');
define('NONCE_KEY',        'Ph]*$UJ5Vvn*0|CEm k{9%(7J>8J%^pWo,g6qpBmh6Y/-Z2p6nDnBT{vth[>V)Dc');
define('AUTH_SALT',        'oGsJX..^fyL@|IJG,S,}@)>mbYw5t<8F.aDx0tcTy!KoTNKWtMV3hU)JbvpY)Aj$');
define('SECURE_AUTH_SALT', '^``*v|%v.v0D2C.jAolFTIOphTc6 ;TV:ROrRa*Bq9#DTNe{z0dth?!bP;vS!wNT');
define('LOGGED_IN_SALT',   'TnTF|BW`dwt6qpM4taE}G37o|+moXL?|vbF)Ju.+^y005Bw]$$NM12`.=G7IFBwX');
define('NONCE_SALT',       'Y/pGb=]fd45[nIy*}>D2Z2g77O_s|X!,oifBL;fb|M<v2/Mg>XOP:?72rZ]S[4|0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/*define ('WPLANG', 'de_DE');*/
