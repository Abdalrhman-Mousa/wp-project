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
define( 'DB_NAME', 'site2' );

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
define( 'AUTH_KEY',         'G<xl6s=l:uM<zX:$vD8YMiy!bAxptwgL`^@iwn_?m*DIU S6*$b77vH=1I;w@uT0' );
define( 'SECURE_AUTH_KEY',  '+}j8K#g<`_}%Nz8iO5V@g~QR?#=q8X1ERzRR2.C}5<jkN$c>N<MgXw&?kJ4/j@; ' );
define( 'LOGGED_IN_KEY',    ' 1))f[Ykl8i0L`t W;+zzkLuJ62KnmQho;tk:R;6R3p<zWc|MIiN8N{zD~U+r=xr' );
define( 'NONCE_KEY',        'cVVx5Az$fk+6&)NB~%Dw+&GXSUK8V[1I7v(r{8FVYY5L*aC9uPe/ZB}PlmKDl~D%' );
define( 'AUTH_SALT',        'O%vK~ZONv!tjJ5y`tiZ`ia(N~Mu+{qP)jv(0>)xQ%g6^LC,P>vJM4hDV3{dyvE<J' );
define( 'SECURE_AUTH_SALT', '_e]uATmY[**:K1Pnpd998E%?=S[80S%{T=NuaXHe?~yrC2-?--,$2}&M9dg4 ()s' );
define( 'LOGGED_IN_SALT',   'zrE@f19.5PN=FRUHH[(3+w6S#<Wj)3ri?9x$@q7x|u&lv)NTJ6+y/d+VOYJpb0Ri' );
define( 'NONCE_SALT',       '.cfQ@pC/^S;vjv%a)}i9S>L4P~qqQ1z,T_S/}FWkiMk?O5sjMe1,O;(,1#VPh@7h' );

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
