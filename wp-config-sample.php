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
define( 'DB_NAME', 'mgtanum' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'XWG?q3e+S^jCc)-QlaLux_v/=$)$W0zAPK<sZ1ba(|XC]gt$;R}5B4;;LO*uO9L,');
define('SECURE_AUTH_KEY',  'VR)k~O]}1~t]2 dsnQ<|PZOY>kLYwHHW;Ckr2D.w{F6kE64-xc&:]yW|!z5}AwuD');
define('LOGGED_IN_KEY',    'ACL6V_|;!iLU=am0mF|B_$2@Nn453U7dcT:8/*!B4xs1ygSR[uc0:Qb_e3vgTWKv');
define('NONCE_KEY',        'h~]|aaBZ9eR{eV+gAi_:0+nBv]ncJHC88Hc:)$|MRJ-y?)QfHAFaBK-P( F~w<#w');
define('AUTH_SALT',        '[}3VFt#$](iioRL6`2*-xK?Q~|-[c0b1-cqzxr0RA1+3$1(-vA!-)wLL|zi(qfE`');
define('SECURE_AUTH_SALT', '#X}ck(R*JO-!>afzg]%a)XyJ6{#-g}s/T(:wyzl(z~!d&|d=P*v5Ihs}_^0Tz*A4');
define('LOGGED_IN_SALT',   'ImO{q0Cger%(jI+>|H@rB@W_?%TGUZM/.m|6C9Y:~-+Gl{w#>{~``h_`%93K=DE1');
define('NONCE_SALT',       '}b&k&m}]98-8:-+fB^i^$-_@;rJVW~s(oX%|JvlUR~zz*.G#{Tl}~=>?:5<H!YPq');

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
