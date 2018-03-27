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
define('DB_NAME', 'healthico');

/** MySQL database username */
define('DB_USER', 'junoonis');

/** MySQL database password */
define('DB_PASSWORD', '77151345');

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
define('AUTH_KEY',         '+6qoppmFb&+PT{{8M,th+2]vn=ka  Re2DCQUdff[0n6x!^N?S9qnQ=Y/S;rHyul');
define('SECURE_AUTH_KEY',  '&FW yus@I9kLMfFBl^{r=$2J2xYf2|8>h8eQUQ[tU<,dwd8kl/U[L2),B:}E^NMo');
define('LOGGED_IN_KEY',    'e5{fiK@u;~m<1o<gW]|;~YV0(uR46)2WfG//G;OZz$Tx-N8i-*jP=&70sB2$DIr3');
define('NONCE_KEY',        'ql*OB!Pd~vi6sdpTEc1{@Zo5{R//3sM+`#Ota(<a:?7d|uiPmc]U!iFs<$wjQ-it');
define('AUTH_SALT',        'f?*kE>_M}X,ABG!e=rkl5b&{g:+!*EJ_C5y@kg,_Iuq*z3c@%[Rw1v[mWQ)0jzza');
define('SECURE_AUTH_SALT', '#m*q5>/-loI/dFKhX0_qwcS[0q&Rh_y#fp9^R~[({O87QY6w`8WDy`3:cJb<Tx`,');
define('LOGGED_IN_SALT',   'I,nX1}H{D70w2|5dgg.*z]f|}4Ll`H7MRZ]ZnVIfO90uBYd-3KY&>Wh9Z`~p*0,o');
define('NONCE_SALT',       '@AfW[EV<,#w/o4,Wn$&M6)c[:IecR2L+Pu,$RbRhJ]a[^|WI=^/NV@Fzigp_. xg');

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
