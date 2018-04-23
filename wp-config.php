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
define('DB_NAME', 'tpProcess27_db');

/** MySQL database username */
define('DB_USER', 'tpProcess27_u');

/** MySQL database password */
define('DB_PASSWORD', 'tpProcess27@1@1');

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
define('AUTH_KEY',         'smwL#5,zRS5_zi0E![zzC<,HvX)4eeW+<^}=tP|pS1Wm<5N}+{L!SEgPU5}q=W0 ');
define('SECURE_AUTH_KEY',  'ENszinATo>lRz:]6-nX[c=7qHNv.r`_B%]WOSmHAO0b{ 6/nZ%m >Yr>P&NS0Sv,');
define('LOGGED_IN_KEY',    'NRBwvIk^/n3 1AT/2vusnIW`3wVGUYld#k0Qhm1vC2t9ATVwOG?b4S%= EI;RoWE');
define('NONCE_KEY',        'hz!)E%lN< -Cp:_RE Y@z>pk7a|!HVAl^FM}~ApgH`3>dT(=.HvQ38_%96GXOtU>');
define('AUTH_SALT',        '15VFS8|sb>_:|j3@j?>nUzwg VH<c}({ &B~3cX^e>_aeyc(2pP)2`0R-!e,w}%A');
define('SECURE_AUTH_SALT', 't50xn}A4F)U]hx(sQc];OP+h$lTPcs]lY{Ik8Ee^#m)3##nMs>^gvCf GMPtw]HE');
define('LOGGED_IN_SALT',   'CaVi^fgM4,vjuHH`l=mDuM0eY(e(YExB%oZRNDJg$Z_n@J[vZ&gp:O>#`2#+F,D;');
define('NONCE_SALT',       'FE/utzW7US$a<MfF|3`Hr$l7*_|jvf?AA~~KQR[b6CIG{/9uuN=%S7O%(M0e9Bub');

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
