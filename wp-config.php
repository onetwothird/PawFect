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
define( 'DB_NAME', 'pawfect' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '~z.Xa7(1@[}/+5Ei1{D+VED($1S8DwcPQ56<I7M-,HJak5dNKq.p%7bIu#b`PCoh' );
define( 'SECURE_AUTH_KEY',  '7;E8B4!r{Rz`*9x`4i,FjUyP?tHezC8Hr%MWF%-4tSQ}.%sG5T)P{H:8Y@gjM~%Z' );
define( 'LOGGED_IN_KEY',    'w+/@@I`>.r{ri71R@sF1:ytY;pl=H%i%s*gGn#R&]CT(=}Tl|xhDp6yOGk0Rh[5;' );
define( 'NONCE_KEY',        'e3Xi3QUi[Xw*yE(6,~XT`aO*V=e[6#k`N>Ic@q:4owI5D]=Bh37L}$**=}S,?f.&' );
define( 'AUTH_SALT',        'X-3[^@r::*`e_[/)h?pU26hOjw9;>?9S&Q3;wK!BvyTI_mgJ#L!lI93-FqZ*^{uI' );
define( 'SECURE_AUTH_SALT', 'W$Q:/IGlXHbhBoq0j@8g5kUlXwCQu$l@X9YlN&f7TAjhj/^5#X=BLA{7(`.}X}Lg' );
define( 'LOGGED_IN_SALT',   'e~@jGKJK1s,h6YZj{ZKP^<EQ^z$c4@{a#7EPc4nu&8>hB@AR|81LOS!J$h)xu1KL' );
define( 'NONCE_SALT',       ' *o+2A`R4;.fk8ZN0-}nX+{3)xnbME.?l<{!]3}`:zO}5]seJLE @Ymv [19 &ku' );

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
