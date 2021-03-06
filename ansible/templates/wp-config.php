<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '-Z~&]~!`hJd$18iN>5vc~SgEC7zsTi+QWqTTP7sfu)`H{fA+b2T&IJ@vyExX;4{p');
define('SECURE_AUTH_KEY',  'sdfgdfgdfg^dfgdfgdfgert456ert5iJ[v/8X+k_fdfgdfgdfgdfgdfgdfgdfgfg');
define('LOGGED_IN_KEY',    '>Vk.&(a8v~{)bn6{Ljs_)e6tJx%vI>s]<uMEdz-bax`pNs(&YYh:r.<%z`YF-SF!');
define('NONCE_KEY',        'NJn]s*rG<Cy54qwetdfg5246tgergegfdsgdsgA1O36L^s/_g&1ykDxKsGG(/YW1');
define('AUTH_SALT',        'z yk`KraPx8`!qly%hjVtfyKAWRZ6sDHY]O9Dlp[HFudO99`;9 Mi{JjBDaO)`Of');
define('SECURE_AUTH_SALT', 'Oy|p)^L=H*oI2tXe(|3od<0CM;/|r$./ &RsV|(i[<yriZw|yAFM}<$pi.jMIug+');
define('LOGGED_IN_SALT',   'FGIKcb`:ntOC*h;>XApQ%4El8p%i}}?0kf/>gD7]OV5lTuuTpv<$fWGkE5]He#.n');
define('NONCE_SALT',       'v14bke_~of0N?h*$%je?IeLPIWdvgUf{SJ?**d]}fWG}Yg/kj!LQ53CO0g%N$#m,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
