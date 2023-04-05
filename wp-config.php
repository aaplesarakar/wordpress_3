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
define( 'DB_NAME', 'wordpress_3' );

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
define( 'AUTH_KEY',         '+bYJ# e0xV^E[hKdb.K|3H TG>Y>UXGxe;4Mx}DyRkiGgT3l+>?,y$=$zg=%?#;Y' );
define( 'SECURE_AUTH_KEY',  'E#`AQhj,GgvKOyDtxZ;P}k+W{*_z=/4j6MzOYaPM!_A)J]Ny9Nz_{V&8hz*ZKA1J' );
define( 'LOGGED_IN_KEY',    ',_YnExLD_Zt`qx>!&s+:X*A~#^DEky89d&o<t]uyJU)#3;n,F[=-K!Y/H;|JI0=J' );
define( 'NONCE_KEY',        'V0)qKiVIAzdy=!r4u|)xe8WR[C<xG2&UNdF/By0*D)mf_|2U)7(_3vT!.m@Jy;(C' );
define( 'AUTH_SALT',        ',z8LREd$i(t 9X=l#$.3c{;QE=PgdbFPkM;h!ROIt?V+{0h} LXv6K 17jzHjc &' );
define( 'SECURE_AUTH_SALT', '>pG6M]kk :%<a[K5`#v&6LEdfoJLaq/qJ:2fRvL(;RFb=jan~3s:*v=K;NTr4Bh$' );
define( 'LOGGED_IN_SALT',   '#a<D]{U_b+e_RpOC~Kf)j9WYMET;e96.9H4A}i~OMLx8CrjufycnE`5:>#GfWb4{' );
define( 'NONCE_SALT',       'Mfqrthq$/e0_.LC649SFBcI[VW~WbRt5h?:@&7>K#sg=)xMY5~J_,:*V:uC+$<#8' );

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
