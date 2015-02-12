<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'demo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         ' (]&P4sym=*#/%G(5&MrIYVWG7x-jJgQk(U2I@(8+r.0K/#>WomC$jwK-&YHV+V,');
define('SECURE_AUTH_KEY',  '}BuQmtof*+Tz@&bLWUt*MGd#cz/7~tmg/#qOI9Av)1k7@U5EIOjwYu32To5k)B(@');
define('LOGGED_IN_KEY',    ' ?k&@{=y5nWx6iT`CrItvJeZ34Z2XrGp#0A.K:S,T+/$&xqHga==I#kGz&|8|[+u');
define('NONCE_KEY',        'QOhvC&h$/I;G}F -9=XUfS2d;e:Bj3eKdr%&6!f<QfyG9eD1Jk^ov[4-$tpdB;bE');
define('AUTH_SALT',        'qfU|.Iekq5d &Syx+3l[#B&R-)+3_67R$9$xJo24T!|a&:v(RM2v 412m-VFq7rG');
define('SECURE_AUTH_SALT', 'WQ5_-rn&tWm|wt&NK*TGy:|-tAmeYf+KS@@b4Yqi3k@v}R5-lC[y~2FPH-l1.C#M');
define('LOGGED_IN_SALT',   'tDzW:&t<A_d^JwL5T;pb(|u5zON<&2!1bjf47R6O<w&r`X6-De1aptIdH.ConVoj');
define('NONCE_SALT',       'U_X o]Q _e2u3?|jPua[E`|kWpBht*$4EHa?-vwzC%AeR3FgUE ao=zagKCR(H2^');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '96M');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
