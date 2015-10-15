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
define('DB_NAME', 'lavish-lawn');

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
define('AUTH_KEY',         '(Xw-/=;j`Nt}/NBs9eVulC[glOe=$h-ns>J> >PN:pqb0q7W/mH&&;t@D>Ko7>} ');
define('SECURE_AUTH_KEY',  '`-H(d;_KQcBXPEw+fha@ZbzB/oE1*KC2~BUI6LxkLH{Q.m3Ak5<k-utK|pzLN!UC');
define('LOGGED_IN_KEY',    's=FMb&@OseWD9TX}bA|U1R+g,_]+[}48-0$?`C^ojr([0X,Df_Y@ZcR(C)NX3BIl');
define('NONCE_KEY',        'D0J03X|NnVT?%x$R7w0[:A=2oBGA;W9@:{>yKxnH)(oY(Tt)L-SBi@rEub[(rhgw');
define('AUTH_SALT',        '6QRpyu|#g[1NLt.:Y-)DPNuZwXsi-O$IM[I+%;VZSccUEuF6Pd-,@OOD+]p%!KL+');
define('SECURE_AUTH_SALT', '391;f?j#kevj*M,KPsX5=9Z{ wB+#lsi.S]21P/^&*h6$5u~]2S|v%fWKn#G FLj');
define('LOGGED_IN_SALT',   'neA/)nB*UEz++kb.xgxj|ND/CLiE>>cGT@ZV+jSxspW`]s fy7JmRoG^pj?w9Sek');
define('NONCE_SALT',       'X*MhY`k vkbd<;lF#lU?3ey4wRlVX&|)6u?76>Ga;Uo)5I!Xg/6<_![(3~m7.tR+');

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
