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
define('DB_NAME', 'delima');

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
define('AUTH_KEY',         '.]T;?7dv/AZ;S{W%}@i!_dHMC3;!rPZnwO9sT9?3;eo)x-n [.?*M.gW,2}yn[`i');
define('SECURE_AUTH_KEY',  '-5npl]]_)FnA|a;YHU2gY3QfQg<|J/E7%h0cqL8lDaKRtjC)bH.;`9G&&)sE9M,N');
define('LOGGED_IN_KEY',    'sf5 J<P[Bd#|zz=08<}.ePp.(E217}T~qGF<Kfy5xnPYPR 8`m;WpW(Bh]G+Df,v');
define('NONCE_KEY',        'bearNC.9%gpzd0v}i]RR {A,M:(DnnfT gO?MAn&JbJgC_z9Rvn>^T-GmxRoP^%]');
define('AUTH_SALT',        'ZQz1/-k.F6J8UX.k+-O2b<j:lG%Hd$ tgv$VdLwmBe</3icfn? FJD4VCT1E9=r[');
define('SECURE_AUTH_SALT', 'E?X~3AXo2*temsb2Kj&V1fHI!MlkLTcAvyL5`]=XN2G,$pV#Sy`Kcz0iG2_Y,5!C');
define('LOGGED_IN_SALT',   'E^>),>w/.)-fdimP|7:9t?[o~[NO ;Q]e#@2r[p-J%EI-O*?Aq8=G0WDgMVQH}SN');
define('NONCE_SALT',       '_jp8<m!c4rP7W%y4*&bQc3L>a.i(X<<J#he7Of8Z=d/zn4`k>+(h]xwwJ{DKfVM3');

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
