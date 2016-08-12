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
define('DB_NAME', 'db_menulis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1q3e5t');

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
define('AUTH_KEY',         '=uM%6FY8)d/~Hy,) X2O1qF;$%hEgf!WB3hKx^/33sKKaXL>sV?Z]AY]4p)hG+vw');
define('SECURE_AUTH_KEY',  '/#<Zsco<mc;9^<JW%y@?eumoUcvuE~M16i[i#@YqphkM@;ky379ndzH[O^mw`tI]');
define('LOGGED_IN_KEY',    'y.yKmS%VBDDpD!o_.9kJ+sBd p2V3oo/oGO=`DZEWYxTWVUQ)yVb pgd0m5;+5B4');
define('NONCE_KEY',        'yx%qng<drwVq?SXuoR^fK,cJo;sNIVdI-7jia|r}vH}GoJRhfzn5r}}z^hJq&`G]');
define('AUTH_SALT',        'o3hi]#W:!$CP l%F1h#PI*>2+T.*fJ}xr!8@Fcth|;h4{R et6y;pGzZ.C#V9e$D');
define('SECURE_AUTH_SALT', 'dkn9J]@R1miN%F!}9@o,gL.^nT,^e~^pbu|ty2vGg A%T <QO8k#L%vL<3-4;3ud');
define('LOGGED_IN_SALT',   'WuXX/2<(c[q[X]Ho8QW1]Ur-I.eHOUOc|f@r|EoSwmr[Wp{PpU2a, N)Ozhm{8G>');
define('NONCE_SALT',       'CZD{ZDc8E;r.-C$;N;T_F:WA+N)^1Ix+PEf2ryo-o2f]=z!_n=ZXEa+]F{QN|fpi');

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
