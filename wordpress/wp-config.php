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
define('DB_NAME', 'ipad-roger');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[X.5dY<3zJ.~S-yg/;8(I~cc(y|qkQe16^Xz7S82{]YM 9OhBA.&bWhXyeSfH@W/');
define('SECURE_AUTH_KEY',  'ww~07dNet,J0L=~}Nt9]UnV<iz:/aRCEdIXh515W~HhK%6}b!L{qL4y-&!1T}:)z');
define('LOGGED_IN_KEY',    'c}~Nltu$[2QUWd@3dnX#Ne=0vp*LTUp)oBLw*M%szE@0AepmU8~q1_qwvIl0XwuW');
define('NONCE_KEY',        '*:/|i82j<h%?*wmrk0HpgJu$j{q,fP.>X:w:|0wuGcPh%! 5xcl7+i5Kh_1k/a|i');
define('AUTH_SALT',        '_`{=Wy]E;`Mxe5Zj+cW+:cz~!4Kx*W=qxRpXh295Kt%;jw4{0fmIQNz07+$~Lm`*');
define('SECURE_AUTH_SALT', 'LGBmT9_84vL]tgbIC;nlL%E}wozF./v_/t5b3<P_W<-NF|pw18R9#+T8C`H(x{tA');
define('LOGGED_IN_SALT',   '&noKM7J0JD=qD|ggsA+_Hyir}BKyUg7UJg_bd4Z#QO#N0[z8{>$^jo:jp7gNUw}+');
define('NONCE_SALT',       'u+r-:zz&!Qa|<b-MgFKW<iJ |l=|c`L[g,hh9<l.Pa}}#1tKTn,H}oS[;wi?}A[V');

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
