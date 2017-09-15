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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'drupal');

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
define('AUTH_KEY',         'ijZ#RG=b{.&{=3Fa|(LhlhQCKEn%Zuxm4<cVEAvUkjpFYhm36$fJ.adJ!~0Z-.:9');
define('SECURE_AUTH_KEY',  '3>>m:?o yASz6Gv@T-Y; L,l9J:h{r|7?FC(6[=67dd>O~2 M}_O9wnJ5M;~[zAb');
define('LOGGED_IN_KEY',    'Q}q,AwQ9%7|6#1ee@w?fkGWKzq{/)8v^Y39B5A-|W;Z7(arQzx2g0_/;uv];[.3,');
define('NONCE_KEY',        'r$f^c~ 8=Y<5fd+bS~T*9kv&uhZ!461Mp4NrM3e?kGk~#&yPP{ee^c<A#p=R/>*%');
define('AUTH_SALT',        'NrsuOp`?wiJIXMGn}%w-uU@o6b}(${e6S$v&-n>z>fMk`.iCSA}7;&19)cI;H`UV');
define('SECURE_AUTH_SALT', ';5WRQiz<#:Jt|v7m6x#3kCfrD1 ^7xhn=?s{5^OV]#Lm%#ffL2O>;nKmP`R$*JRs');
define('LOGGED_IN_SALT',   ']K5L}{GOK8uUWU=1Rg*RaE[2G)sy:M^Z}>g@>*-&wnN:P`dn XlG_eZ[9RVxCdV(');
define('NONCE_SALT',       't,Q:7ZVoaCXVq}0BwJj]NW}U)`3]@}e?hKt^$5JW$_^S/xnIcv0r~*D:&(!R+@tV');

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
