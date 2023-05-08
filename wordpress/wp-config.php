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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Project-4' );

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
define( 'AUTH_KEY',         '&xZ[|W)[0ZgG4Y%./V8Bp8A{QsV{r[T+yGSvW`xMM9<FS+HXsmgA`$G%)KDT]7wt' );
define( 'SECURE_AUTH_KEY',  '|W6p,fEt!o|VkvP<Q!=}5<d|po|0XS{v_*1Z%v^<k&}pd4+4!^i71GGfZr#M=FM/' );
define( 'LOGGED_IN_KEY',    'vj1v4flxskPL7;Cfy34yo+2#pcYc/8W;>.cGV_Fj^jOdKWIih%ofAVR?u7)xT<G7' );
define( 'NONCE_KEY',        'umz._8rfz+)x6dS;[(&lE)m`u%H%mPt=;`k)xb^0/K8K?{Eh]B{z>GN& +((eJp;' );
define( 'AUTH_SALT',        '@SAEIH{P}mJrIsl<Z_9nTINVE`!tt7*F<@,u8loP}nkc^yZ}z`%hdn._&^Zi5uEQ' );
define( 'SECURE_AUTH_SALT', '3`Yv9,HQj~=vfJYj UR+AT0C10 #FcLKY0]aq!|)v`hZ]oa[0xoRc`0b$>WOXqbO' );
define( 'LOGGED_IN_SALT',   'u lw~jlg<M`uv9q5&rETS/*KW@9(F2]K$},DA+[0M.x+-QiTat8 u_PRSbe^Axqn' );
define( 'NONCE_SALT',       '9l;Pcj~+=mb3|H[-z, pO. J#9<Ond_F)G=Og@C;nYw0&rJE7 uBSmFU34)AZ3Md' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp4_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
