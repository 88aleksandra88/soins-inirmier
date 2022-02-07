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
define( 'DB_NAME', 'soins' );

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
define( 'AUTH_KEY',         'd75%?cLU~:*4-c9*pB@!6~5F_UDmkg6]D9~|Nh7-43PAFw-5<U536<gv:l6?J]$P' );
define( 'SECURE_AUTH_KEY',  '?jay:e#4B(%m|;bTmC0$;^00!Me(k{GL!i_X8y*<)58{D~3o67[!AV}jiam/R<0^' );
define( 'LOGGED_IN_KEY',    'R{OZRSZ?QT%%=B~5&MfMp1<5j;1 [H.hniZv7|O?U`ppr4qtRR`Y0V]#BG0Z:y||' );
define( 'NONCE_KEY',        '%N4-f/f!~jaB )W#k%:*95F62|w.c^(TE2z*QF|FiV:R`:Kfz!LRpx6}h~1sz3T[' );
define( 'AUTH_SALT',        'Bq8hdz&G$A?<Xi/HyDSL$#F%948fHA7>ZcUG`qC>C%}!n6!=y{qq!}{,q8/@9sbE' );
define( 'SECURE_AUTH_SALT', '(d79&/L>Q6MXY|,ONsijWE>*4m+2zVuE#aQgWynDIUwndxi{C/R$%iLF2ZIgwW//' );
define( 'LOGGED_IN_SALT',   'CDeXYd2knTnY/BL9JsQcVT/Kp^mYD2{}2PF3pod2B!WX`1])`JYfw(K7FeO?S$%f' );
define( 'NONCE_SALT',       'W.hEC?W_V90&zku&h:(ctQBjr#<060#N132sdu jbL*c0%-yr!jLtKyI:5#;biOb' );

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
