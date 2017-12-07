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
define('DB_NAME', 'urcscon3_sanfrancisco');

/** MySQL database username */
define('DB_USER', 'urcscon3_sanfran');

/** MySQL database password */
define('DB_PASSWORD', 'coffee1N');

/** MySQL hostname */
define('DB_HOST', '66.147.242.186');

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
define('AUTH_KEY',         'f7ru!zKKi^0w|RwNvf*5uQF,7fAG_4Ui|UWvm(1OI<)0+p58{!Oplj``ca=HZ3/ ');
define('SECURE_AUTH_KEY',  '6[;EPx^_SI{]{6Sbc4g5EoKnx9/pgQ)q3DAj{xpU1$vz)OI!js8v}Ks%!,KjC(+|');
define('LOGGED_IN_KEY',    'yHOB:0,N!3IK~{[]!i} r;Myt`ZH#fl;]i-bt*e8YgapvH)eo~DXC&SP:%`_&^XP');
define('NONCE_KEY',        '`Pj(WZ@xV:~y0w_@oe+~Cfj2tY|M1zvTF]Q~8F+VRVe)|iq)n}X]O/;;$-u!(GLN');
define('AUTH_SALT',        '8sB~M*/cM~vu2XGxO j6A&LhhVj)2Xsz%VnW&G. NTk>!/E&X~Mo8_wGV)%gow@4');
define('SECURE_AUTH_SALT', '$;6aVI1>j(=h- CH`$ib_.e~xt*z<x%lR>j<u(pDA/u0rQDjimW^QssI,f=H}N+e');
define('LOGGED_IN_SALT',   '?U1/J-F[;L}xQ-:f,u|iIiy[=q&Y NT AIIStCY^XRT6YM)fEbHEOAp8]bwR:EX*');
define('NONCE_SALT',       'PkUpun|2VmAfkwv^<syA<@:9LtwRdE=_Ga|d%]LQF+02@6owtnC)s=*Ee|%~%Qe0');

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
