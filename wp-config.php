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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'doko' );

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
define( 'AUTH_KEY',         '&!Fj6c&d3k:Mkiw9c?`h.A^Pa8@<bON.E1.!cim8pP-d=d8d!O]Rw(DzmZ3PIK)9' );
define( 'SECURE_AUTH_KEY',  ')0*+g?X`?W5nWxyRgO$pBV2^}_1S68?cF#o^c0vW`t.R@1fxzMVc+o!(23[;HI%b' );
define( 'LOGGED_IN_KEY',    '2YDHgq+LG683X&|2Iy]dm6TG(,hOY|OU,1l%08c%)to[q~5=<G:L4O+{%qM6Kyqs' );
define( 'NONCE_KEY',        'F)sE~0p)VRlYu@h[ns`c!PDchO,@e`ZNC$mfZlWZc&08:>(98>*~t@6X8.#Xsq33' );
define( 'AUTH_SALT',        '>c<^Bp1<]:8xR]XD.SrZ;K!a>U#!ew0j|IqzSO7D;Llp:GUa]6QpS@nUL}G<cQUy' );
define( 'SECURE_AUTH_SALT', '8Mmd&{{rA&C3w+J_Re5:6h2KOC&B9*a})y:`4/`YRUba^!,#FP>5o|}_EAe&_79V' );
define( 'LOGGED_IN_SALT',   'I)jg/??LW1o1M`GHw]z1{rcc}Wc#pZYjtZYn?y{hmLZLK35}?b1G=K)Q+:#:Kagn' );
define( 'NONCE_SALT',       'QfFgLtQ^i>_P%`Z!4nyB&,[L2+@OvQ=~A`<<n?k;u6C]qKlSd%geCV6 ax:nO^m&' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
