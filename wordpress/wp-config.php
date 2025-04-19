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
define( 'DB_NAME', 'localsite' );

/** Database username */
define( 'DB_USER', 'localuser' );

/** Database password */
define( 'DB_PASSWORD', 'f35OieDV3N52Bv3Q' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'B04^V*,;Fv!s2K/wCs)).B+()a<refmA-]WXv/51+b}]oEj$|sSJ{nvDY9y|)$x*' );
define( 'SECURE_AUTH_KEY',  'eLSQse7l!tBg6f]0|YrNY,,h]mTxd2#cJ;|q[dv]|Qe4(i-rQ<p-Hewy+;H.ku=n' );
define( 'LOGGED_IN_KEY',    '{|[{8YqFgWbA^S`!9Y]h2%We2~M-!g(:g7%FGS#01*M%~}q%rm}Y(_^l,NkZ0v(9' );
define( 'NONCE_KEY',        'ezBnolt$D=~5;QjE$eYJ7mj]?=<G3S&oM/w*pM.G}[$RLB-d]?fy3L*|.~%cnxQ^' );
define( 'AUTH_SALT',        'ar>LS-Y0!]@[gI!7K C$y<PiH!s r~Xyyg]q} F2kWx4;`//>9,9-!9E?j*U)(9*' );
define( 'SECURE_AUTH_SALT', 'WIou~P9*/$u(BkvO5[fS~f[_/3@v8r[SxpQHX[tYf]Zk1q};i;L9[?j[uQH7`*4e' );
define( 'LOGGED_IN_SALT',   'CXpl K$&7.,7f/qr$Hh|?.v#gil6Oq.#oG06*]V:HnDoJ?/G^>Z4s,X&qbOXvX5}' );
define( 'NONCE_SALT',       'wGUF>Uhv@2vc-5i%Yhd1.H[s5,t:VsO|R;dj-uB ks`Q(gq:`21_mbGf00qH~rM;' );

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
$table_prefix = 'wp_local';

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

