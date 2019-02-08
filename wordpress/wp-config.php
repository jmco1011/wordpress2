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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '<N=]?UgAR)zEPnDZxv!:M8CM?/^LZ:80dFR4sCVjlET7T`m|14o1IE*Pwh7C,2-y');
define('SECURE_AUTH_KEY',  'GFwNxHW[8]#H2PM[q4CiZvciL0~JmI?#Shv?(oH+R?D>(aTJ)d_*zA}*5*i[SLQ;');
define('LOGGED_IN_KEY',    'YJutW(36=1,$,02%W%F?-OD!iwG>N5m4kD-A^$n#c4Rfo.-8h,7/Rox(Xu:?U6]7');
define('NONCE_KEY',        '$h^VM9dJlQ!?3l?xz`gP$u3MX9dCEA}Z<a7Aa37ENA^u(9M|%4U^gY(VyQ791G7G');
define('AUTH_SALT',        '6l1H{Wc)yM+eXfkjqn0/G`E#xe[P6ULTfw0p`qUwX+g?E1C45/d6`DTf:/zDg3T[');
define('SECURE_AUTH_SALT', '6=T%E~ <1~I(Eu&xi@g7j k+aZG.RLQ3k7JT6tV#o`IC`r/lDyc3G5sUF_VKRy,g');
define('LOGGED_IN_SALT',   '+0vqq)~R@V7mvB!U7)sI_#@inHM6n*y2/-&G7%,s)%|M3>5TQ@-*5F0+G3b}4BQB');
define('NONCE_SALT',       'P!_QMg=M[U`0K*ZAqrvKk@Afsin:]Q~tRnx8D~vjbfzSUnJb*z2,z/m5R[EK/Z9f');

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
