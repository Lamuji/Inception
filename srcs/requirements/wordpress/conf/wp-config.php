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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_USER_PW') );

/** Database hostname */
define( 'DB_HOST', 'mariadb:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8_bin' );

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
define('AUTH_KEY',         '!~VB?qZw9^ )w+-JhfA{}l{|T3!*Y7}iVPH9`$%T`w;#g UGqbcqtEuB`Q=w]zDz');
define('SECURE_AUTH_KEY',  'L-cY/ELW{jw3]+-r;8qkW;__+4Bv/#?qR::]~ff-e!.xnYvK&y%|Pd|+MKZ&xu9%');
define('LOGGED_IN_KEY',    'RC$FY~cF(kVhHI}n;:7x{cMaB9AJp>jOCg65IGxVY+CfRK`xqQ2GV9vh-R3,2mSC');
define('NONCE_KEY',        'GqByKob,pXq&JxNl[TWb%8FJpVI4Ix0&aTm)=t_LR<H}&Fu51g-^;e-Jx7Y*,{}<');
define('AUTH_SALT',        '@Z*,i{bcRtc5.]7u/Fm&5)F9o9tw:zRM>Dz9%c+u};v+U(Id+fCl2z HbK%:TK^-');
define('SECURE_AUTH_SALT', '-{*>>1>}Y-Lp|`8W-L,Zk(- Is}N35>Wx&Ue$P2?=?,B*1+mx7qDm/h2nwaEH?8?');
define('LOGGED_IN_SALT',   'ge-KIa$eKO]D7@==LX 3JUd)Lf|Yig<9F}kaZlSYE$wMg8#Gg>^1r#)9qC9`++<9');
define('NONCE_SALT',       '1hOPWS#gw0Wc-,{gj.E-`Tol?8tG*ir5 u->z1K)?s>-!l;Is4JIWRK)s#e1O|-=');


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

?>
