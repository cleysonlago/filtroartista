<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

/** Database username */
define( 'DB_USER', 'web' );

/** Database password */
define( 'DB_PASSWORD', 'web' );

/** Database hostname */
define( 'DB_HOST', 'svbanco' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']@;_gv`&m*as0:>@,a~m,D/2LMWRwFcjS!r.c<#QCuDP KJcB<({1KI3$y1UOx!^' );
define( 'SECURE_AUTH_KEY',  '7E6jw2%IkOfo3YKF{^S{R[K+)jg9o|?CQs/<Q=5+{|7UCv_D5:}G~n0zqff!d9o)' );
define( 'LOGGED_IN_KEY',    '_,,)mYz$, & K/0=.{O2$3YiZFg>[7hNRW PvQ+?!L_/=ju. 7W5$5i*f,O  $c^' );
define( 'NONCE_KEY',        '*b3T[f#P$nIO&n}sx^5/qmajg|yEUrC-JW,TCM]T0VsR!ihUo3jchu|folNhSVs(' );
define( 'AUTH_SALT',        'x=R=BZz(5CO`}9By!&+wM|pR f_)||rF>_rAS3wZp$`F&LR25o5`ngYvu!f!j>]3' );
define( 'SECURE_AUTH_SALT', 'o?g#f=FP#L~6h3>}Ea]i^grBb{`jm4OLG|gD!Fu5{[E_l[b8ZInWLnq~_yu->{}q' );
define( 'LOGGED_IN_SALT',   '%]E]e3Hyv 928<f1l;M=4O]@6FV}sZ6AO[0EZ$ICRHT},0f5(#o5W42c|By2z;2f' );
define( 'NONCE_SALT',       'uLTV_!u4RUvAd[z3#T-<oCzGBary-*M&Ui `[sM[e<[Aq?cbg*tYI*pB^0$Q,fia' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
