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
define('DB_NAME', 'sred_eng');

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
define('AUTH_KEY',         '3oPoV=Eb<`J<:f-lIP^E8H;Y6a85EUu$2GAljaI5+QDV%J6e]|/?utmOG+KLWQsq');
define('SECURE_AUTH_KEY',  'j/Ym!3&-}[,WB=?PjwM=Ipt]]P@%=pyh.DZf) U(.QgWGHCaOKv:hi>t^mZYK-_d');
define('LOGGED_IN_KEY',    'rVpl&vq~ &UiaGDfY@}DJzt#^+)gz!.98p>:9w%HG),S*SK`ak+K>PL&DUo_lODo');
define('NONCE_KEY',        ']g)uY>fE(!2>b#]O]g.pCS?-[/k)cZ[t3KLhn$qaI@ )61SwHWvgoUM+_jD!5{,7');
define('AUTH_SALT',        'R@c1r&5N}z3jl[*K(oS(wgI%6 N^ N0;]HV_MZ~`KybcN6x:{<o? `^)gU=y:#TJ');
define('SECURE_AUTH_SALT', 'wgVuRERM7q.VC,z?K|d9czv/I~(LPW:-#[|Bp,0x~ >FD:@pV*~VSC|EQve?rTz,');
define('LOGGED_IN_SALT',   '<*PI|k0LB|E[nC@Y9dLn^lSRV:a6Wt;)M=srVx}!hpi+aE9kYdF;z=KsN#Vhb_1b');
define('NONCE_SALT',       'v?#9+4=hJm0ZAT6.6|h> F,o>eINrWrZ;uC6x[)%9I?=w`PAuSMl]zm2c*Bd+KZJ');

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
