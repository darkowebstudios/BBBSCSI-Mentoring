<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define('DB_NAME', 'darkostudios_ca_1');

/** MySQL database username */
define('DB_USER', 'darkostudiosca1');

/** MySQL database password */
define('DB_PASSWORD', 'ZUAb^veF');

/** MySQL hostname */
define('DB_HOST', 'mysql.darkostudios.ca');

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
define('AUTH_KEY',         ';rh0s`6t2_5YQew!22n+/d@N4QDHB(~Z5lXVI5#j^?wLZ)w"Y^Y|hF9~"iUrm&7!');
define('SECURE_AUTH_KEY',  'jt)uxKjvgx8sBaM`QF&livkbjn;z)aKG!o_46^zz(c7%:o9benZqv|:DtzGkEKc?');
define('LOGGED_IN_KEY',    'V8hvy)1AU^FEVP;L(7FEo:AXOM75NIkJt~_yJH|19^*`Oeeu6G(hlvfN&pfR:bJN');
define('NONCE_KEY',        '?^!44md)S)W^Qy?+U#&DP/2npdEt4JIU)LOc_W(6JmkLEgKF5"XT^V`W2yp")5@h');
define('AUTH_SALT',        'J$L#Pv/qRq/1Vh3y|WlI6!*#M4s:w;#RM"AiX@)d3dbGs(2brR_nDrsJ"2LdDJnW');
define('SECURE_AUTH_SALT', ':/%So~ylXR3d7Qn!&xfa8B)XKC9gz5%gcXx|#d7/S5b_r5(*#?F0az*?lFitJszg');
define('LOGGED_IN_SALT',   'UJcp&Qq61$6q4:^C^kYK/!oYXXjDy)VPv|yFZ?j!CH#eF_;n1+sXGv:&qw$fJrKx');
define('NONCE_SALT',       'IA6YIiPFU0q&g%SID~gM0V66/97dt%I*GU#/Np*QDNX8:4;bA!jqcDYS0dXG_:ym');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wbirtf_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

