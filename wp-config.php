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
define('DB_NAME', '30ProjectsProject');

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
define('AUTH_KEY',         '9C7wj|3PYXh:pb<;KU[[aLhEJq!)0Td}zAqVa7i!6.{<LFy|QasMj13L/P+.}4<f');
define('SECURE_AUTH_KEY',  'k}{zWSLyJ7Mf;`Qnb]:E`KZ4}evoY|){N<ph,v~ZH b/Z80w{KIz!~3Xaej8Ud ~');
define('LOGGED_IN_KEY',    '`1>PqwgKVHI{ U*3D~)Z)^>$.jm]drJYgO*i=L2Eox2gG}AQHLH>rKQUO~i~ 0K9');
define('NONCE_KEY',        'D-u8l#lB@RF3wni%/DX/-AZjvW^{*kcrv&u fet3RN_xJE%q3dee6k X5rJ,Hqd4');
define('AUTH_SALT',        'u5hy8G!X?voYs3R4A&vvF?#W9v>/Rq(6Jh,]@QfmHyYnhncopb<<#A*P1%a(m8D-');
define('SECURE_AUTH_SALT', 'S^<s?m#o@Wvlqh*u-}!4w5!#V^vcQB+g?.*Rxxo->sCl6Ac*C&dH[K=)qn@;a(_j');
define('LOGGED_IN_SALT',   '-I]sDwvrf Pl3*b+:y5lK)]U)4w$~%> YWsmP:@;fIs^{Zj/y>$[d3.sTTkk_G0J');
define('NONCE_SALT',       'S7F0Mfy-9U 55)@R[mKIKmDN-_~J!1W;Jd0K%{9c~_~YG{MQ=:Z|L:4IX$u]uu2)');

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
