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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST'));

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
define('AUTH_KEY',         'X6pGxtg{6lW->+B1}*R3M1fgM_j2+CH2)c~UR>>BY}Nf<83w_spJ%9@kI,1. 5_W');
define('SECURE_AUTH_KEY',  'pz2-9 -G@;^JPdr^M2XiK[0;j3k92a0mNEl|3~+[cQdH7i ret!D*]~f#eRrd_W$');
define('LOGGED_IN_KEY',    'P{[M,*Y`dy+sd5Xq!><aICI}=Vb:ra{H{r3|d=W+5B|aiG`jQ*.+5r 5+=+nIaTv');
define('NONCE_KEY',        'JI+:PHm+l|uGX+b 6F~+0{CXA}cv|{y]S&^x?65N3_1k{*o22HScBYzs-66F(1uN');
define('AUTH_SALT',        '2+GrY+;sA0^{Ep:`>%[V-|ghHqM9Y3[pZAom*Rb[DaD$lNHR8Y=u<+Tpu_M{B!F>');
define('SECURE_AUTH_SALT', 'fk5Hgi*J;q,ZHA[2%u]H MLCt!n.5~N%LLo%FXg[+@Ev!/U@|~I5@bIsBI/]3e?-');
define('LOGGED_IN_SALT',   ',A.bQ|5M3|~Mz0Lju>K-7b|bhpy&X-%$dft-:MLW{al6$ewjX/0YYZG>v[|}4eDF');
define('NONCE_SALT',       'Pw7|J5R[+(Cu:V ~i1at6RMU-A[KC2O;GZmaE.C^tWFmp yR)0Y9cvCc9KR~:_3>');

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
