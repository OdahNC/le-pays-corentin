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
define( 'DB_NAME', 'wp-ecf-corentin' );

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
define( 'AUTH_KEY',         'r N!a9%)q@P}SbeJ7yT%,WF#>/W+q/),w}B.ofX(^QBFrl29nB3@4*BiIM5VDb^q' );
define( 'SECURE_AUTH_KEY',  'j=9hf@tHb[i&AcI5&<m()*@}w6s>MU=F.$iqx2={~ll$^&.skc<c>uuNes2NON8g' );
define( 'LOGGED_IN_KEY',    'JFNU_%1EpnjJ/F<-qY3cN8zcXWv4Z%m`#[*I(q.x`.jHK6yn<(-eWUeNS!zsU/.l' );
define( 'NONCE_KEY',        'p=eZRwu2?{I;TxLA*Z?!hPI75v6O)a+ah2KzDgZyfQW(t6xzKvXc)@%%bEfo%pMM' );
define( 'AUTH_SALT',        '*(_X9qMQEXa2,A}ZZNe_O4O>Y8Eh0:Nb$XXTm_*BZ%xq:0wOTh!4E(x|YD^C&#z,' );
define( 'SECURE_AUTH_SALT', 'S~^<LWa9ky+hVD_o<2y5tGh-M$.(u4d`uD[I`g<(=Z Sz9*4!KnB8,zo`I7|}s`:' );
define( 'LOGGED_IN_SALT',   '#v]>/JNM>SM4{_2zf}Xc|*T!$9^08^T)^`{/4.T_M 01/(Qkh MlU:O:Akiq>).?' );
define( 'NONCE_SALT',       'W|]93d]pY;(8d~k{ZhiI<:*obsBX5I>7ak(/.lCq%G19KR{y/bYNw|cVw3x`_[cu' );

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
