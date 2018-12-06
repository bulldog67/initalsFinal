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
define('DB_NAME', 'initalsFinal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'H%rLJ`x+l522)cjNe^gqAM]!joAygVvzU,j~dD!]WPC)nzsUY}7S*[z-W<arj_i=');
define('SECURE_AUTH_KEY',  'mAXw48x;sv>Bot*g,<3 2Aov ck*DL<HOxzMJH?{NAlcR[+p!)W0(QM@?%uK>a1$');
define('LOGGED_IN_KEY',    '{=z+2+8M@ xZd2?!|mHQN> bmb[)N%OAc}jcMp1NjuwkQmE]pB,5,/>-27{ZEG>9');
define('NONCE_KEY',        'nl0@g?^rPG-jCI=Z10 fWKjIHtSF3U)c$@:Ws|%,n;ty9FwN]?S(Db/Ip#Y=tZ|W');
define('AUTH_SALT',        'p8sM%WQd_8Q+&}eOui6zw$/bWp!#;.7ETMi$I+qe|]S|i$kpC&h%E7Q3 YWdfWhG');
define('SECURE_AUTH_SALT', 'ibGh}0Cb7`jC;VmJ34#f]1TF!bD&8AI%;n-5vfLk88kQ=ePQjs7^wmy558o;FTIC');
define('LOGGED_IN_SALT',   ';yAjOF)vbe?O372yk| 9-;OFgD)y$^C3]eFRl77]U@+Z:[?-4hu|In1`k+R.H?X)');
define('NONCE_SALT',       '%,EJMSl=g<*-?%7v`m_#:-M_nFF.Gzbm#h*Jvvl]k}[)EDY9RaL6t1ro&fa1Pl*(');

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
