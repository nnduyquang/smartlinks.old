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
define('DB_NAME', 'smaa7688_smartlinks');

/** MySQL database username */
define('DB_USER', 'smaa7688_admin');

/** MySQL database password */
define('DB_PASSWORD', 'quantrismartlinks2016-_-');

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
define('AUTH_KEY',         'D,f)DrHEAf$UM/#1[N),-&KM+hx,e43mk%Utdu!tFYsA=oPIM+,28Gf#p Md_RU]');
define('SECURE_AUTH_KEY',  'p5Z?ajOai=.^FD}QPVm).G9`V-urR%z-+6c6RT@<i?&.{0t9q]Ao u! /MzVh_=G');
define('LOGGED_IN_KEY',    'U7s`3w*3)-L,73|*XDW9{zJPY-U,0^AE3 ARrXBN?_SOZUfZG>*`sFzF@F~apTFH');
define('NONCE_KEY',        '|3Bl<`%%Q%6`b0gC#%&zwS%% tFQ-B+F|;(i~!M-(iA!4&hVO?X-1#j-w/#^3wt%');
define('AUTH_SALT',        'XJe%OCv]dLK<h!j$-~dr5S<x?L&<ayeFDw[X.So-4<45)|9F`--d)DRM-``:%a#F');
define('SECURE_AUTH_SALT', 'f;i&OG0%W+7[k,S^J5;(3d9A{biVs(m[z| x0QKb(UB><1,.BNHF(-d(.](&*/Y!');
define('LOGGED_IN_SALT',   'REsg-!~+wK#*e,e*b}Q_cr*<s%~6MO47i]sZLF-d|iN-9U>rJ5^~7_pU=Yh3RcW_');
define('NONCE_SALT',       'E{?+e&YbJF|Cc}tpw;O]s/O)xJ+fN=][ItzCcb|P;RJK**pkGcbVqqTCdD)<TeyL');

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
