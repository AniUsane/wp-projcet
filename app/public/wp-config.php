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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'qEC&Na XQ3vD .wn>F/=^R W6T49<Q-->}}j]$n*|SQ!tF/d7f-k7~.3Eo9>;[W2' );
define( 'SECURE_AUTH_KEY',   '}|u!!)Fy?OkBGzK$T<&*_[u/=M_|AmDb] ?7Y0m{kH|&TZ:nW.kR%|(A:P]x*Ja4' );
define( 'LOGGED_IN_KEY',     'Pa|+ZfH3|zirmq{mv:>>P;`>r?eLAFSnJF/:2dS#%~Ap&nK x9%LOkczvG4pJrNg' );
define( 'NONCE_KEY',         '9&O4X}-!lIPZ&|!^BePbI8QMw~:?xQXOq~M*Cx7B^l.*[E!?Ij=mn>)|%5JU=$0W' );
define( 'AUTH_SALT',         '&b,<q_fLTl(eo2&?[.RX* rt/c%]0sdrj{AEsmp Ia!d8t|_*rF )3_9pa}Qn9Ba' );
define( 'SECURE_AUTH_SALT',  '.Hogm5K};-I%6|SN#{HR gx`t*w:73lM0GMu`,2}9hhrs1/T*o<xi<jsVu0~=z+.' );
define( 'LOGGED_IN_SALT',    'O:YcI*SKI>g7(we|qcl 3XeYOVa{wK~0I]yiQ48<k3|Q#_Z0GL9V5wLO[?`P#~|9' );
define( 'NONCE_SALT',        '&X?!>6z4n++s2BfAuw!-ic>6i]j_oxsbxF:&~[>Eh(lM*;,PnUW.iAcPR->U}?P_' );
define( 'WP_CACHE_KEY_SALT', '2Q!z.ygw9,bfY$rPi*Z]6KfAg,k(O6%i0f99=Vy+ie`&c,1Q4Hp<C@kAC@t_vk`q' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
