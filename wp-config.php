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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Myp@$$word33' );

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
define('AUTH_KEY',         'ji*<D%6:Z!i$T$-mau0x@>s:<_N:+~-S3guo#NxbT[uT$nn aG|U&ady|>Pp| If');
define('SECURE_AUTH_KEY',  'M4}q|}iU|dor:MjBi6IR5=!7<P!a#}_s=xKrg`5yA0FddQ(XDZ}D{#B%KqDV(fEW');
define('LOGGED_IN_KEY',    '&)TaVw+u_I.(W%P>}/I?1k=^;DDG/{K #6,-Yx1;YDl6_!R9MuJ}pAP0L@c[HHX7');
define('NONCE_KEY',        'B-l-W<nLy7ade[>^?<S2p0P#g}yl(oWJQ/xf?o=d5x$[(HVgG=_)N}+5lxP/PFMj');
define('AUTH_SALT',        '].pqXVH?q}m&|bk+^-q%Ch!+-!vCG7|nZD+pH,D|=nN+7v{1$vrWmbqtdd?-P@k@');
define('SECURE_AUTH_SALT', '$qS$G[V>4.,skr+8>lumab_+HVXcaz7!^O@ErTJDSLX*!CT)1^3rshFR|I.&K-Yc');
define('LOGGED_IN_SALT',   'yTo#l4:<)F0JH<_&ol|+?FG6^Bzt97<P)x7,aSs44Wnqm=BU&W=%oYSe#e#~Di@4');
define('NONCE_SALT',       'm:+B&iiK8`W-7{[.t,>rpOFfW7noe@@+;W;Vt*aR{CXM ~)=k2I`UH10M4H_Cn=5');

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
