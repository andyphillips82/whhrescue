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
define('DB_NAME', 'whhrescue');

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
define('AUTH_KEY',         '%%9t;{SQcGCC!)B5y.-<E|?,_bL?V~?x~_PW+1[_3eoYK0rxN6lP<db$M5(> @.c');
define('SECURE_AUTH_KEY',  '<E?1o#Ei5&Vw{}Ed65E7c@pl+]{:D}l [_ALjijat9/V?A 5ER`p%qQ6&~)GdPMR');
define('LOGGED_IN_KEY',    '2d[CcY&T.T1}7k;lPOT<AA5~z$Wn&z1bsRt$[(8M)>nE&HaandJ9q2SBPq|$t[e_');
define('NONCE_KEY',        'q9<O9X_fGUYe(=&Vq2_[uJ)Hy.JRAmMr>G 8NQy$Zng[7 fx/>Ar1OS#j9NZnz}j');
define('AUTH_SALT',        '^Hs{.^-es*OzI!Mi ZG27%)*);AxVi&tl9ch-Mso4tlb<O@,Mi0.mV`#*<U-Q^PD');
define('SECURE_AUTH_SALT', '{Cd`X~,R cVc-:q>tSni]ii[wGXFMJ-7voK!WjU5}6duJ-h_rarZ@k$).t?F)]wy');
define('LOGGED_IN_SALT',   'Wb)lD_[[bTGOA5GR BQ{FbkO]@|_U^4L`FX1Oc%W;O)rdB~:yX}-bq? Y}!(U F4');
define('NONCE_SALT',       '^D:sCy|Mi|NRW`&GWtETenqV&tl(Q5fFA{2fd.l{jgO^UE/A[_gSGoTaz-y::S~B');

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
