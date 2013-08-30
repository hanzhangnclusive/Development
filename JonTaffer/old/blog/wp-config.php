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
define('DB_NAME', 'jontaffer');

/** MySQL database username */
define('DB_USER', 'jontaffer');

/** MySQL database password */
define('DB_PASSWORD', 'passwordJT55');

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
define('AUTH_KEY',         'aYi;96a[-+;{aD $R3^);/C/pWwrfTd}o;uqTD|J*PZMjky+,X*-l-s3F}9bxzb:');
define('SECURE_AUTH_KEY',  '8YQBU&15FH&b-opQYVmJ^<y+I+S8`qBt@)v;YGH#R|+]G<ekAIqRQ~XGTVl]tZ(k');
define('LOGGED_IN_KEY',    'H7F@~aezif>bhBV57|qNu=&&j8%duD$8qu#M,iob[@^VP1ju=)FxOh)ork-9*JFD');
define('NONCE_KEY',        '#T|l,L4qT4aQV@Deo89@`NnK UK,Z.GlU6j#Ww=(,I;GH Mp;6Ua/M$+k|V[TFH<');
define('AUTH_SALT',        '3C/*[%<hPD]qxXh<wki_2fI4N15}H:j u-b@GVeby.h^hN@IhAuW@,{,8|wdPK8Z');
define('SECURE_AUTH_SALT', 'G~-[@^=eclL|gZ8ml%D(NR<2l5C.D?4!8}PY+eNwJD*/p|Y.J/@xu`CH]Ud|}P4b');
define('LOGGED_IN_SALT',   '9*Lt|k!-6}HJE7q<e+vKZTOdk`<q^* Bv~dAj@v_DRFsOvgYkc~h=#8|NLu`|B12');
define('NONCE_SALT',       '.Mcz1d$QA!d`fSH|wW:vxT=^%rOLcE!n?:EA!#c4qy]D@]7$:HS+-/w/@uwFku&g');

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
