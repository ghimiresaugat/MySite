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
define( 'DB_NAME', 'website_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wg&Q?|}_]=TH5F&c]5g9=yKG`c/?n2]qtyi=5F<cz?-5:r-&CyT6eVfzUJFv?]I:' );
define( 'SECURE_AUTH_KEY',  '$}i]6Q)$EppJj0Vfg~)PYq97+DkY4cI]Fj0+b+L7lBOcG<,?(TQG5X%>LXmXO)E2' );
define( 'LOGGED_IN_KEY',    ') 8 }}J(E$**dThfz~uVcW;C.!,B}O!aTTtNUZKxZ5 8OlBjk!NY:DA<`LT*I4sJ' );
define( 'NONCE_KEY',        '`]IK>sx96=QT.`sMMUX{;$ii)EiNiP3K0&b~Ukv]%:j;Stjpzq7n*4w,Ai.Ob?e1' );
define( 'AUTH_SALT',        'C|79!y-OZ.x%,-gTjMG]9jDe+ngu{tugL%r[A@*gchs8vvqzb&FCQ@`TVE5*Bu$;' );
define( 'SECURE_AUTH_SALT', '{C5(,5f%t`Azm/ZrB;^g5<s2D300I6Dw?*SGv|aIT^hXxwcef3e2L~]%47-2vE/w' );
define( 'LOGGED_IN_SALT',   '&5O{H+q^6U:C%,d <; 3jnFGPH,;SRu$Y{QbJv?4S=a3id0Gh:-kHdFd~1:E<Tc;' );
define( 'NONCE_SALT',       'R;p~&4<j?z,E6=B:*cSHPz7XBsTI{I,s+~YDadw+OglC;^q^NVGX5wH XP;_l|gp' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
