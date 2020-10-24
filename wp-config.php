<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbayitechtk' );

/** MySQL database username */
define( 'DB_USER', 'mysqlmanager' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DBmanager56@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0lOL `E&k#|]cw;_ITJ>(g8aa+KJy_:c3y#t,2cKZ}/sD~^,U>e[v-O]32Qb#l!>' );
define( 'SECURE_AUTH_KEY',  'O]hX&{&YXZ}J.JQ [eFi3h&c1S1TI<3yFn:JPH/iE4k2cQx@PB4)JQrp[L^2lh_-' );
define( 'LOGGED_IN_KEY',    'b_7Hed-/z+lZ)w1..qu]`9({n/2ES$7EDc ZE#o{2@A!uZ#y)~d9l5(kAA3F*gF?' );
define( 'NONCE_KEY',        '!lS6J@YV^cDA*&yK`zYKne;1JhUA)byR]BXLLw0NE%0P5Ut!!>wf~(5g/=>mfN28' );
define( 'AUTH_SALT',        '^CP$xvxRY1/8ShV[(f~m8kD?~H;86c%4/<6;U1(X~Ny`>c%[7/mlDuOY7|>eWGEl' );
define( 'SECURE_AUTH_SALT', 'Zc Cgu].<a}gvBm4wkxns,_,`Y[oq.fPZU[MDf_cXE{aaKqMo|R]qHyciZ85e&_y' );
define( 'LOGGED_IN_SALT',   'I@j`77QV U^tohmI*U;ej/~yn(Q2:h.Zm:NQ_2`NKx|Aw[Lm=:8xEt5<^0VndsZ6' );
define( 'NONCE_SALT',       'J7J71lCZIcp]_(!=;vSV^^[*4^FZg41_1ktpof]RAL6ZK=.=Fmo7)MY@#[41) 7P' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
