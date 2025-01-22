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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'admin1234' );

/** Database hostname */
define( 'DB_HOST', '192.168.56.7' );

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
define('AUTH_KEY',         '&B3+(T-X{k0XJ]FgU+wpK]3Ks4};sY|f~(wZJ6:.C:<#>,z)gLm+gb%NT1tV-kmC');
define('SECURE_AUTH_KEY',  '-#FsEW`O1mkM*^NquGg/qycI1#p,--q^e{$`Od+^MVp*q?%Alh3PPBL 34r1TT50');
define('LOGGED_IN_KEY',    'X8v!{`pH^9kS|OLp8L^R_+L-=Lm.G5yc~!8TxKs[{O9r-(l0{73-UK714{Tb}LAW');
define('NONCE_KEY',        'vB},k< CL/om[9]qPRZ%%|=9XsBS!Mf[wa{qEgPS8?13&4lJ4!h?1au)q5Yn-hj+');
define('AUTH_SALT',        '~X9E_EI~%h$+cTT3a|5/$818=|<F){H+BA1<X*LMRjy-:9Vxs.<(<6==)ax+<F,k');
define('SECURE_AUTH_SALT', 'Tz%vk/(;Kq%F7J,Pc%bdR@+A_##aU?+m C0<Uu7 GkK..>^).m]O|%0;mUeGZB8#');
define('LOGGED_IN_SALT',   ';kDA?>~%-4b{+ S@y?U`)]e vb$#[pyWyMQH,_F[`>kJh$@[+|&6oZ/0O0JSxErg');
define('NONCE_SALT',       '~|4b:D8ggW%XSHWgFRa4hu+}9V=Vn*KJ7$1B)e>4+HGSQw`!H,AROqOIMOAV`6P6');
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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
