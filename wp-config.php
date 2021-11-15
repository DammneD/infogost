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
define('DB_NAME', 'bhx20243_infogost');

/** MySQL database username */
define('DB_USER', 'bhx20243_admin');

/** MySQL database password */
define('DB_PASSWORD', 'xIxlotus2');

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
define('AUTH_KEY',         '_zU*?1dx3G2J@u2>=t&U!YjI.!$In*I#IalLLH:rKw_=Z^ zE%Y~?(d*ERqd`^/&');
define('SECURE_AUTH_KEY',  '_wM!hZJd$t~VQ}1}l.K_U}R0]:L9a$QkGVrEQfcXm}tOysOH!UT&]5l4{6&Xtx*C');
define('LOGGED_IN_KEY',    '1dC~c(%n+_Kz5l-YeU=}jRt/28R-L=12vgTTkwM6 ye}{,I3$/o<OcO8O^kjaLpb');
define('NONCE_KEY',        '(1A&/-Y--.bz|nJ|WL!rxtb/N_^RR|)11oJ&aZJ&3B~[S~dfu94oBxBOePIz{4V]');
define('AUTH_SALT',        'Zl$/kH(eQTQbH[0CC.;t#UrL[h:w4i-YRU&:KkVV5hi@%w!hFSyn*6je|RNhUd;J');
define('SECURE_AUTH_SALT', 'RGg^0aRgHivK(U}.7?-[E9n(EUCU/q1-s&seak3zv2_3I$|i6hwfDNl#$iIN_M#Q');
define('LOGGED_IN_SALT',   'A}gX4:@WUn-cZ)}e$A-1#OcS0g,5rDT(cj`%@cX]Yr@Ms^o-~F4@o)C}BY^!l^:y');
define('NONCE_SALT',       'c)N-{&z<YLb]Zc]DD7FXsM$HU*u9-x5FOJMVf0P4K1S;mBeAd-Wu0j@00p-o6J6W');

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
