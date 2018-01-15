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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

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
define('AUTH_KEY',         '<W3r|![y^doP_xgQ@LiL*89}$Bm/XDR7w`r||;^CESc;K=*|4;[Np~hjDzBo=!%#');
define('SECURE_AUTH_KEY',  'v#L+UBqnyz|-WpHWzF%}RphL-K:PX~CM!&uq(M1Mi]KSkY1I%aQV{|+9h ;bkQ^D');
define('LOGGED_IN_KEY',    '!TPLRUq7^[Q*:FO.0d*0zIr1{.+]e_(N=U {-A:UX )e7`Ucaw+#7)RI^4btE C[');
define('NONCE_KEY',        'Bl^7T7<OL|SH++o4F,yE.TsmLUYp<(b3t![cihC8kGABEDJiui1-*xh3OnzJUIWh');
define('AUTH_SALT',        '+j6!_,aCr9&RMYy&5x4ALNb+ii$)rf-?M!4wn9!%`4J(79n{sYWD#y+fL2<{TIN|');
define('SECURE_AUTH_SALT', ']x)gV<%9%FA1Y%tM4V|dY!yy=5DI|,t~gVoE4^ERq`/4ZT~QaGTuH} W4y>0sG}Q');
define('LOGGED_IN_SALT',   'JY$!CgJ2]d}91kF}8H<ZFaPW6-R%P+~yn,3b>MY^WTskMvb/4yJw|5x{DlQGH;Hh');
define('NONCE_SALT',       '@gOiBfkj|Ef98z%h:s:0KI6oEMrL,o$lT~aonPh,rfOyh`tqDlahW^Qcmky3beax');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
