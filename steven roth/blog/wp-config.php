<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'wordpress_0');

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
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'LKRpI5eCnnffxpKuzjtODTp*OfF$5f^B1DDSjyjP1GH6a5@rdqSxK*s#f^(JgLPm');
define('SECURE_AUTH_KEY',  'zYL2dpf2m#fA7dJ$LOw7b@9QbvoVnm4cDQarZCIrsksU6h*mb6OpXs4Z@Ef0HQs#');
define('LOGGED_IN_KEY',    'gDnMhSg6OEdWaM$w&q&$vkg5tPxIbpJS(1e3G&AS)p^s2!L!zUy8FtHGc1t7tQzd');
define('NONCE_KEY',        'w4VzLaczr0j#2uq4Dv(c%#qKsN92L0%0QDd)hngZqK(N9(6PCKhfMteWm!@4^00P');
define('AUTH_SALT',        '2hp9XgMMa^XOzRCsMcY!9L$n1l*P9Mr)dr3%BnrO76E^Ixm2o5oLE!^KSY$SYV(m');
define('SECURE_AUTH_SALT', 'QRR6oAz1OWoK$v@f@Qbw9#NX@DBTbuVj31B$Y!AeW(1H@f5idWDiXOnNB%@NSAyu');
define('LOGGED_IN_SALT',   'u()ihQvNKMdexiuzAxeaQQh&*n21ke#Rns4$XEFhDMW3NU3gKcx)!0cHhlzvW^sh');
define('NONCE_SALT',       '*P4HqCUTBNgeFIYl!hoC&BXatE8G939cZ44sCVa2CD9LxSkWdMYwmnEIBS$#IJut');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
