<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mysite_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'j<$[t.~Q~EYOxKtJD6/ut63fh7j,0]y{XZvwxcm2lfO6Xgl+-Cl!P}SjFHE%X46!' );
define( 'SECURE_AUTH_KEY',  'yfIb!6y1P+#u[cA@<bw`vNRVYl^Q84U@2K<Y=nya!BTrB}[:#k>=WS&[*x-e$@B/' );
define( 'LOGGED_IN_KEY',    '5D@zp$9=7QUy=QNstktpqQOi)3]X!K;vRc^LD[RD]%#7]GI0N*_yt)K!!E2cBfGf' );
define( 'NONCE_KEY',        'T`^/|Sf5;59Z84#M+6|#:na4Q(/+yE3|IeyLFFxw8}ecVI<znZb0V+UvLO&()9&(' );
define( 'AUTH_SALT',        'y qO/+61rfD GUidz%,i21`4|YP^~OIH5}9yJ%>TIVIndN+W~=i1-xKtUq9_6d3{' );
define( 'SECURE_AUTH_SALT', ',q&&1NNc}&HN18)HEV3~)Lc29c!gBdU#&7S)ik?1%tmXLrajC&y->HbTE6vzy4wn' );
define( 'LOGGED_IN_SALT',   ';;Hdh(MW#{Xedy~EGTwD&*W>B!s`C/~3$1E_r[f,2e`UatQ)FXnX^Pn$}h??_WD)' );
define( 'NONCE_SALT',       ')KAMh~n^KSv>W)yU%hF;v%+%c1r0jV05pJoD5rt&1lwI)c#3ttMiX  erg2Q|U43' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
