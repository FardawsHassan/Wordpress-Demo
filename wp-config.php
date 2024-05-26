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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'YyOJ0j!fRiu)dI&:[jUuauC>LBZ-6QvCcxZ/azn!x[-%I7*kGU d@e3V49EC|3U%' );
define( 'SECURE_AUTH_KEY',  '5e-v4.: PoyEx$:13QbGyefYMT[-w^,|Qy%{^dyAJe[ri;H2-^f(k2hphR7-yVO&' );
define( 'LOGGED_IN_KEY',    '~mY#=xPJbw_hijK!;&sL^OkAyHnDBk_3upK1HMu! {=$TLJSp=C?L~VX}Nle.4^:' );
define( 'NONCE_KEY',        '7Hj]fzu)oL7Zq>fVo/~<~CLxeA JkcQj{;)Z%~[{k{}*Ji|tmS>@B7CfF,6xPseY' );
define( 'AUTH_SALT',        'ZVvRiG*>am?i[C}{)e6YG~1c{}y~uIkyF4K)O[3,J!QNcc7)e{%yYyr^k4IlU+{=' );
define( 'SECURE_AUTH_SALT', 'Z<W4Zoq8Gf4t.v.hw)DU*6Bj-;8):+rJGz^(moKx.-RD9f<#6O0Mc=%=sj:d*U9n' );
define( 'LOGGED_IN_SALT',   'h#6!-M=v5@~YxuuaP&jW8u,:$ hbkwrANZe~&QQT*{|0Y=LUEFvR?s!bw97*h}wT' );
define( 'NONCE_SALT',       'u>Juy,Wj:i]tv*aOr/f{7SHlc,Qg=Vbh8If:<a2rP$`MV?(6?Mh?W/7fST8Uu9TB' );

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
