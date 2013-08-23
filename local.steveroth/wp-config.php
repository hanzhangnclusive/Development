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
define('DB_NAME', 'stevenroth');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '#|fIVBSD:i:idU,wL~-X<K<|lm,ku`++2kxX.(S<$xO~8r$j^ZX0r.s+1%XwA4Qr');
define('SECURE_AUTH_KEY',  'qVLmu^ZP2a}%inkP~wK.3d|Ner86Ccc`e#3,~In>eXC9]iNU[1rPIZQ%B3>:+8a<');
define('LOGGED_IN_KEY',    'aqGprv*ZH#NX-80<GyigKl/PA1W8i$U_-[=4QYDcn+_w9Fa)uc~Ba8?LFmaeDj>u');
define('NONCE_KEY',        '=5Jx+3dZ|[]L{)o13TL~7|msr:Q%Sf1brR#K!%~|lo-sQ3@a[acMmDvmJy+H:3:#');
define('AUTH_SALT',        ';oI<<Q2rQiWv+#{:Se_B$}s8m=aP6Gej2s|<wNOf/Q2~3w303nO;0SaiwVEl|Pj-');
define('SECURE_AUTH_SALT', '5pn*xQd+,FTi_+)7<1s_1vwjHDw;IJ[kdFk.[DX#l=26MN=gb+ uMnuP;#Y2@~O_');
define('LOGGED_IN_SALT',   '!U&6nW1E7hTC6mJmC,E[1[:(^2$8@BJc XS94Xz;W-rmnm]~T^I-P$^0@qs]bX0B');
define('NONCE_SALT',       '=Zx80#3G69^GwDSq=qI:)K1Gq(T;eDtWNWCnF3x!_;ME}&oI6*h|1S|c+oj||Wo<');

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
