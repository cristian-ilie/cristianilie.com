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
define('DB_NAME', 'ci');

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
define('AUTH_KEY',         '5iu6lQ={vlcaFP{pU`>a8|]SFkBH:>.F)x0aJj&YBbC?fwjJNY~#<fe`9zY(g=1X');
define('SECURE_AUTH_KEY',  'vBl|sKcD:.I=pF*er,no^qKEVsg.V@`8!|-pCG6nD[W3-dS|1/<64SIVt)#4kl5$');
define('LOGGED_IN_KEY',    '^uNZTp-aFCql,VH8+dJ#WH7}*sh2~&$^3LY*_Ii#grf4`8y$|No<z5iT9$1D&Bm.');
define('NONCE_KEY',        ',/^]p;$p.Q^Ti9r22|g:gs-28$~}>nf;PBvq&Cmo]s3*j3LiW<+:a|><ob0$KSys');
define('AUTH_SALT',        'V,NdTB#KO[%ku@};UMjWyad%nK2Hya{RSl+OxPRIA_W{t>c/Z4oYTMjBIHc}VJN.');
define('SECURE_AUTH_SALT', 'hL03jH1X),?]P_u2jMhZiq30gVWS~.B-b2jNV(KWp2pGK}>gu1:z82B}6v+q3uBI');
define('LOGGED_IN_SALT',   'HP]dz6_f&B0}pLFWHKJ3{%dlk4!E=|b^KCX4P^l?D1jsGYQy^rGN5q)@~YKUrGBr');
define('NONCE_SALT',       'aYn}rD<-Tsq-ORe,wEXBz~((V>!WIh1W?q_KEW:FM_>9n`0q;mhk1{G]y}v2IWJ~');

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
