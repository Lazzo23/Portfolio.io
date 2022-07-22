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
define( 'DB_NAME', 'miha_lazic_portfolio' );

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
define( 'AUTH_KEY',         ')krJ7d#T#*1i&AODDIv`w2jo+X@_W&WT9|om]a6fucc(}?16I<2m|*mKDWJ.q<yQ' );
define( 'SECURE_AUTH_KEY',  '?#w^4aR|L~[e;bF#_aIQe_d:/nMB_6@-e2:H2j_GiXne.rc5]+SJ|+;5wF $#Q|l' );
define( 'LOGGED_IN_KEY',    '~*`y`DT*G~N9[x:`!vif54Wjf|vfSBqj21*WcA;8t41u&N&f)1aBuew]pf1yC.+M' );
define( 'NONCE_KEY',        '?:$Vz=WdOp$=3q.5Ht+BMAmaZsZaUiOC|/B!v)Ph:UiBT;c2r EsSa^(l}L5&z6O' );
define( 'AUTH_SALT',        '3kg^F$qIfU/,5A{0UirjRB4mm_Xs<d/Mgn1yHw},L_ScZdI!`z39xTL:Z]/sqp q' );
define( 'SECURE_AUTH_SALT', 'gYE*lS0O&)8u`1U,0lL&xx^#?)HVu8}:Iw]L~n?vomFhE736jHQU>yxKjTF%0Mwu' );
define( 'LOGGED_IN_SALT',   'pa_y)iLB<wh0?w{!DqHb!$Ya]lHWpCP$~UT/tE,n`13W}@{Ms9GHN$Un_l9_czOf' );
define( 'NONCE_SALT',       'spjG[-<8n<$gq)7*IOs6{T+u|~r6IkW*g6=1DP,gWkGJ^fVjuqP<G7J9+-AjsyhW' );

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
