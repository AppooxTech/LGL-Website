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
define( 'AUTH_KEY',          '3uzdcKJ6ArO4B3HVl#4y_m[F6Y/pBd/CeMU{swCF.D=H%UL*,;c;h/dlSdaM+pr%' );
define( 'SECURE_AUTH_KEY',   '1Fz<r9Y+%`8C|[PQwpt}$ADRI$o,RyP(Wll5@u,xL159eZ:}LJj|&zO5VVp4On|-' );
define( 'LOGGED_IN_KEY',     '^o4u^lV+eMfhl%,{0)K_yo_5LZz8pA&?Yb;6v]CF}yyeX$p$d@O*00k3 ;1917#y' );
define( 'NONCE_KEY',         '{[bZ%7(%w?ZvrT=e&{&)tGc4ZY[uicTj2RxM5e#iGp,QINa-g`!X`1.8|35|Iic^' );
define( 'AUTH_SALT',         'Hm%U[MC%;(ZfnYYn6 qiZk^99yn?#IW[p@7M^s!^eJ hh6NK5:KrQ#wM-&W,<CW!' );
define( 'SECURE_AUTH_SALT',  ']SkdV jjP72p,2}{uqt>h84u>3HQS:UL!`BkD`*QtDMa9r]#1i>)E}pV/-jEOWy:' );
define( 'LOGGED_IN_SALT',    'PVk(|<2k|Cil:B0]sEX&v dn~4v&W>$84dm.`~v}piT4R)6,nL0{2%I}Ytpg(sZt' );
define( 'NONCE_SALT',        'n}H%9KRJZc)~]1aKA;l~lc8S,Qp8J?=~r.JNV @bM*m%r^ZwxMpTf%jH%Q~iSQdu' );
define( 'WP_CACHE_KEY_SALT', 'yz,j,ZAmt:x;d950z_6<7k)rIdAnc*rj36 eV-TF~7WL*r,5W[-G%o EnN1UTb[I' );


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
