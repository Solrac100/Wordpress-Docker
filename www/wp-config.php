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
define('DB_NAME', 'wordpressdb');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'asdasd');

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
define('AUTH_KEY',         'P}rW }ayd59}FWn4{6{r*3hVC#aUe?{?bZpfv,Tj_eYctQ*[_v+!+f0#)[^LA}.X');
define('SECURE_AUTH_KEY',  ',s&|/R+B4y8|ON?w*I;@nTK7aSo@>jU LGBh-o|wO)*[n;8ekxwJvO/;^n&+e!$B');
define('LOGGED_IN_KEY',    '[4XYmY3XiR``3ufNGV&5_>8JB+gvc_[j-XY3e{V%<evdb|MuIv9 r^nJM>{pm-IK');
define('NONCE_KEY',        '&.]i~%>F=<@gl?D&|VOQ4<g:r<O]w,LD.2_n]-+_t5*7^e_@./ *^7c>(-OH1H|+');
define('AUTH_SALT',        '}k&/MS!@Ciyx{+ntgjA6|4AK1>K-%DA/b>gvQFYa1+8}o<hw@X$tKaKK~kuD((T7');
define('SECURE_AUTH_SALT', '/v4J_L$(&KkG|b)a4|A46U){M-+7>6Jw;RHWsZDL%}=V`Sv([-[4;K`~Yd(2/!Q}');
define('LOGGED_IN_SALT',   '.+>V]/3`9pg)GT+bT>c~Nr4j`2yH==_TGxNZW&Lc@]a5.hR}^d%:RK1:>8y*hgl0');
define('NONCE_SALT',       '1pFSdBb=u`u+@=tO2)rqV,PT7jHbA9rR|%b=LU^X5/LkQHBNZVQI|!$O;*AYl<90');

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
