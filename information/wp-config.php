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
define('DB_NAME', 'sred');

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
define('AUTH_KEY',         'XRa/NWk-P*IK=0BHwRI`)aAGiO<%|t!f_.X>Qt@2m[Jx)4TR%.lOb99lb<bx9h@J');
define('SECURE_AUTH_KEY',  '!Q26mhqg7eM{M*,f$f3|w3t/V7%Bs!9HY6rd0Bb3My 5CdYhHF/qHMwEUtMVxebt');
define('LOGGED_IN_KEY',    '$ydFA:GEGP70$uOTUze{.% Q.:_&i@,.-APg`NTXS>Z!F+dek5RM!L/2[J?0r+e`');
define('NONCE_KEY',        'p.x6VRKD&l+7DTj>nLo[(t`wywYOq]<ed%D.xA3$pD$6s%)Q/M!4w04/i_B`|G|]');
define('AUTH_SALT',        'XpRAfTLX[GT@(8gE!] :O~3b1`}wIcr1rCz1{<4ozJGh$!t8v+Zr9Lh}+yQ/^;5j');
define('SECURE_AUTH_SALT', '>&QkN9D^rUzp!6mkY0>*pd|tQZ{zfAcGLuH=t(bgKHq/HOY[hk2ic;TQZzvHx~S!');
define('LOGGED_IN_SALT',   'Dv^bno:$71tC4C)eCq`z$XN/es-MEV0eXh1Dm&$c{qjXQg+&V~Q9cQ~F}32t9lhW');
define('NONCE_SALT',       'uUmYb/BU06%(,?#1.Uu^b#>7X)6bsdbXM v#HNJI[ixSL88,m}6kI5: P4>xn-tQ');

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
