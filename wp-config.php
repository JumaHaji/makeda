<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'makeda' );

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
define( 'AUTH_KEY',         '/1[%(6tD?}FB E.6Eq!7h-lXE/&pQb[klL%p]h:w0@2)1S#o.ej?cXx2~@G`tZ*4' );
define( 'SECURE_AUTH_KEY',  '7-0M8_aU`A,_k[#V(Y4atBo@B`Pw%j~1D7Bb59RdJ}W?eX3.0 U/c{kA;}kFb&!l' );
define( 'LOGGED_IN_KEY',    '6nhTwb=~NE_iF+keT7:2mNb|b*DgoTg4zvO{Sv_7uCB(_*wg2u(FO+FLoo[>zl5[' );
define( 'NONCE_KEY',        '_nvfuv gTb6|F@g-}PXCu_^.S9ZoiUGyR-YLM3c@tz-Rtw8Bto.`[FR8H+rv2H|S' );
define( 'AUTH_SALT',        '(D{O0.V{.txSU$!@$hKEU!(c-[@-/Rsw!r&}D;Aqa[I})/g,D/t/4e8`ua}$tyG=' );
define( 'SECURE_AUTH_SALT', '&=M{l:|Xn(K=rz ,S}cGzo`{mR2m,L*~-d}>z;6c4q~Qb/J8,H`kLexGUo&a Wpz' );
define( 'LOGGED_IN_SALT',   '=t%$5{WOkK1:K}rlP+XE[7J$7iMlW%s}?qo]M}S!v[0M[eLdv=#6V7<Djs<|^?7X' );
define( 'NONCE_SALT',       'r+Y9%35`E oX@`p))}Bcq.?yNc61Z,3!JDdR.M%[R2$sb>^@(0F5&CW}8$Kd%Ea/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
