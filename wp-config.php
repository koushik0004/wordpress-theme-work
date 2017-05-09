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
define('DB_NAME', 'wordpress_client');

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
define('AUTH_KEY',         ';fJff?t$+e#YoYF_=y9R|,|;nY|r*>!<i8U.E>FaqwL[ rKZCrtp|FBFe5Yax+.~');
define('SECURE_AUTH_KEY',  'NS+.&OPGmLa_P83E%3}Q/,Nlea3r(]bA?)69;cTKkfy:p%VMi<HBC>uj0A>|3zG3');
define('LOGGED_IN_KEY',    'r@BRPEfEF6[D;0@ex}-4[K*;u~Cr4NfT~pYb_4km9)&53@ SnDNwJt=C}6Ey9TYc');
define('NONCE_KEY',        '^$!1RH/9db=:F|qwSqty.Wzczl|RkB=zqpGcjD-HFu+6WO:sH H1~G)H^epi6W2U');
define('AUTH_SALT',        '0* AfM9-@lajCjKf% {aqjQL/fu6~j >YY7cH/?YlwPOg+aC><OBf7+e]n_CTN|W');
define('SECURE_AUTH_SALT', 'p7eOIMAv3!|i?f[i~%C)2qM96?BiWsPN5*wKJB5f!IK@HG`3-ZlLOCCfb@+g-8FY');
define('LOGGED_IN_SALT',   'vCvs(2mSM)vGMSL[g46)4W]~1YF~FnKce.~-t3`S`SQafy+ mo`-2,Z.Sjj(zsEZ');
define('NONCE_SALT',       'BNdqCpGU7vm^vZ[j%&C.ZF!S#+C]YeyHhv-}@yL(Y5Vr-tQe+Llwd``#Cxr6-Hp$');

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
