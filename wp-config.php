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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '598412732');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=l]#9b,:h4R}$qkd7 !N#k>L*}WzSa4B`]F_Pcj01vxyJ=s8`Y`$f[fq]bO/)DR~');
define('SECURE_AUTH_KEY',  '$0[jgwyg(Y GS)>C.:ECBHrx58oJ6eW9/lBR>sH7$R7UzqpBSo.;{MXMGnl-IljT');
define('LOGGED_IN_KEY',    'mf?vHj<8t}}[8lLAv@U5dF.FFaTEPE9CDj*7XurPkbDC=$b~Eu|daq]d@PH,tvr*');
define('NONCE_KEY',        '4Wy;ij9|.g1@P{UrDY^}*70)uVC{,p[/8W`cOpr[3f7+^Le<ilAo|Fbr/*P%]v$Y');
define('AUTH_SALT',        '9gL`Ght|0=cb@-irS`LvzA]^=2a5M2EFa!zN+ReH$_QVX>NcSx]^F<x,Wq^OxH#F');
define('SECURE_AUTH_SALT', ')+b6n[m3?Fm_TG/TYJp||lMH>l{%goIq0Vyqs~4cp{$JMUxC(D|1a%k8*3N/ZYic');
define('LOGGED_IN_SALT',   'BHBJ|,vZK1<ZP#3.,XUMAt~0a%0.Hfv<!@ ve{]PT2tY^++a &FqB;(xXJzVtmDa');
define('NONCE_SALT',       'f%Q#&oIJsYzi~j(*33k n3aJ]}$[}<]QleHFU * YMYC|vOa0]KfD5kdO9=]_#v{');

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
