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
define('DB_NAME', 'cisd-dev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'YJ84%K>ijG-<<s(_u]$_v#QW*LCc.e=!U;Mdq52hDBC|iS[c&NT{b7Qk[Vs9DKCW');
define('SECURE_AUTH_KEY',  'h^ECsW`PDgz7cG_&[Pp1WkGMukiah5Y_fFB!JfPkk7?7l- W`g.JH#oYz]i;F&9+');
define('LOGGED_IN_KEY',    'C;T-Hge,yo|(#SzaJy0n2*w,(]tIR]OW_^ V}H~6WE6YY?jSm?jH=ru<T-L(iJ2u');
define('NONCE_KEY',        '6<@-/.>%OA2/=X4WYU#-v89E.<BNnVqz%W0IjaIeiG 8]t ZL8QmD1}#::}(c2CJ');
define('AUTH_SALT',        'pHKhB47Wi5Z]y(w)#D*AVlJ,HdanAX=ZCImR|.9C{ll[P<L]!M/x.X*+_[;?,}mR');
define('SECURE_AUTH_SALT', 'a(&7zfE^`Q.pa2FDOPnc[t}?DhS/Fn]4=4Bp:CKig)]]n5e`w]>s=R}Yo`*y(lOq');
define('LOGGED_IN_SALT',   '%u_/9k>|Aa&yL>:l`E(B(FV_k-^iR9Z^6@*&e0Z,d?u[@,%-0E*CKnU%#JHYOU{2');
define('NONCE_SALT',       'Ue`$.cLpWS1%?NW3Vx~rpGUyrz=E&?!0<O!_*;=mXmcn%UcvZSrrI:fiXxDc0UHi');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
