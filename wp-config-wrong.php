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
define('AUTH_KEY',         'u[5]5IHz 2OqM-Edf#~G`Y&7}e@><myaj3W}*o*@I>pTl#|&JAU!(ETzRB7i8Ng_');
define('SECURE_AUTH_KEY',  '*O3<5iS0h>Uc$`4UAH;VEEVSI+f+)RFv9*-jz`wD.I)2LSBL*`2Ocnt|c5SVp-Bk');
define('LOGGED_IN_KEY',    'Q_p^F`B}sk^tf22pDyK^!ihkc8m38KDc<G^C}/)Zre.anDbEL^ff(Kw)GwS597{m');
define('NONCE_KEY',        'C.}H^3ZG9H4=6H1F_Ums54Z)/+W&F>ZKOsG3`c|Pej3 xtuKa:^]LXDHcofa%),5');
define('AUTH_SALT',        'u$vPo_8+.Yb/DM74v*<o^H@dDQ[WkDdP#^PI 12j,WYc#}8qa+hH)/sBm)-NAp!9');
define('SECURE_AUTH_SALT', 'mK<gP54}/R*azk)fA{:f^{x$AI3aA xy6/l<ajVwo8!j<~}@Zon|%iQ+I57?%:H|');
define('LOGGED_IN_SALT',   'x1#*2f=U3)7)h}IBcux 3&9L23|vnM9i`Vh``6sF-KNDA5QXA9I,2^QvnHo<`$pQ');
define('NONCE_SALT',       'DndxoB#({g#@Mpi%2FaHA~{;pldmVx*>{;y&9g!u>=r3}r5N TUcyk+c&fGh9wm8');

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
