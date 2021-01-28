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
define( 'DB_NAME', 'ychulalo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '165.227.109.212' );

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
define( 'AUTH_KEY',         'B(3X*<L?SZ[QW<&wb{QYsG>}X4;vR:`{@()&Q;nO&wwky?dP:4:~1-7`bHUD.LHp' );
define( 'SECURE_AUTH_KEY',  'm=ncX;p-l5y{Ueu)!R.=Ohj^9V.0$B3UAATiR*DaqUt/7;)7-S#BXIJK@PO]K]8k' );
define( 'LOGGED_IN_KEY',    'V#[()Zey8rmJ#0N.j9Q]~zI^QtD[^(10/<s1PPHF]1hXd,RcoU^_pm|sn4QQ{)b<' );
define( 'NONCE_KEY',        '%IJ6,oW&Hw?3sl?N!TDiYyOffv{zXh_lC2bl/l>I3Ij$bZR#+1GE+~blg05`#^ub' );
define( 'AUTH_SALT',        'ktR;CVGVRMdz|EbwAn L}}%]Cpo[P.8puzS4},# Yf:efn|iNN$Q#4,a8)Z2%dHP' );
define( 'SECURE_AUTH_SALT', '`-~UI*u!Y_(>x,}D$5^.$7d3G]zhKp]oDM^4_%~A|~.An .#/StwxBVFK!MgO=/R' );
define( 'LOGGED_IN_SALT',   '^&>l{csyL:j?u{FMtyewYR(%CK@o3GAQJ8.kBUSa?latR^Qy-_`T)iihF^1,9b;&' );
define( 'NONCE_SALT',       '&4~]Qd4?<o5VypvW9fMEJz:M7[vP<jj]`cHvv3z/Cm#V+~2(!j^1:bWrC0qHgMbO' );

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
