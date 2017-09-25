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
define('DB_NAME', 'etalon02_stuzo');

/** MySQL database username */
define('DB_USER', 'etalon02_stuzo');

/** MySQL database password */
define('DB_PASSWORD', '3p22ggvs');

/** MySQL hostname */
define('DB_HOST', 'etalon02.mysql.ukraine.com.ua');

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
define('AUTH_KEY',         '?IS5%+1&W0)9rz=,q8:qJ(K|e-xC`#oWfnNoplZXe;elfWa3a^Yh{JZmE-M_ b/!');
define('SECURE_AUTH_KEY',  'g`%u4UIu%;LQuBHk}NVnP2zH6eAWifDnqbT_e2?npit^Hp}DCsAurR2/@#-ZX,8{');
define('LOGGED_IN_KEY',    'J:XqQZ|L#3,#t2sTwB=bN4}_zvF`.qnJpBynZSZxt[(JXQfm`H#@_h=bX%@iX!Ch');
define('NONCE_KEY',        'SmmP6tvE6pFqjv@f^N`C,~/vEe#&U!`2%x8nu?&$ H]JBMS>qFyXF;*.`MYKVk`r');
define('AUTH_SALT',        '6nPW5u;LGG?%JL&2wwma6)$)etio&+n N0e:.FeHlM>-z`BK@r3d~22gU!NVH~Jf');
define('SECURE_AUTH_SALT', 'TQ?SU^^z1%5sLxJ/Qy/VHQ)TY$@4=G90#Jf/]K3k[:$50o-nMmM7{8DZ1H+gkI)L');
define('LOGGED_IN_SALT',   'Ly&WO_!*WmYN*9a?-@QNM<5-,idK!)opi{&>5ZM_qQNao9N2u)y}Rae0O<D_3A`o');
define('NONCE_SALT',       ' AcA%t/JN[O^Q<DLLK9Oko8Ktj3B7Zgjmwr253^p,4/B)h6CI1k*g5X^5vOzsEbd');

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
