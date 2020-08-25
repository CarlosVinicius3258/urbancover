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
define( 'DB_NAME', 'urbancover' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '32588863' );

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
define( 'AUTH_KEY',         ':k%Bl^OY><OLU_KHnr0!AomkxDCP8G:TV Du(=z;t,qu!dplgR+A#{NDfX=!1=%3' );
define( 'SECURE_AUTH_KEY',  '&H:nx}N}Qh6oD8:S{$QH,]so;cT*b*,b~%R8z7<4oz?!7gsHLHBl5X?lN:./%+tw' );
define( 'LOGGED_IN_KEY',    'l2<yQ?6},]x8bmiMQ?W_5jnLWm1TW%<u1eYh-8sakrYjgQu].H6ee@3M=Jn`|Wct' );
define( 'NONCE_KEY',        'FV+s?sHpTm?[g9C=8wtrJVW%@RV}n {nFjTs}[%CD)9d{rKKQ7h@SuLYjSQ$B]WK' );
define( 'AUTH_SALT',        'd/>Y8_FNFZ-L@@yz^=1]0E)PLOr:y!Dh6G**E/9c!*Fp1V6~486S:]D>Q|},1=d)' );
define( 'SECURE_AUTH_SALT', 'xB/:}}>VM02tmXk/u^?}!c|a9xuP{3PK,5Vg#_T!hK!jpJW=dG/E6}40zWes=,,k' );
define( 'LOGGED_IN_SALT',   '{R(^`$Itt!P<6uC<A-1g9>N{YKCnT3!_`owJi.B8l{RuZyPF1qiVG8Y.%K+]5@0q' );
define( 'NONCE_SALT',       '{5CMFRbZQ}Oem&w..9PF`;hcR+YzsjWSs[qm~jQ!Na(WbOyjq% +vmPK|6DZ_0(8' );

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
