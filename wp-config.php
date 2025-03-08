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
define( 'DB_NAME', 'advogadotrabalhista' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'D;N{VQtTxQZ)9+~~XQlVcGD,c7}qh9zjwIoQ`#KRs;La3Q>ht%E0F$n!M>GVx)yh' );
define( 'SECURE_AUTH_KEY',  '5^q*2dCd=f@P|%4!j8|;=M[*!Lc<9bE,Mt10RfGH58O4&FQ5b00u@c|iD2XlV6FY' );
define( 'LOGGED_IN_KEY',    ']QMF`At/5`z?c[+`z9{OY,]Y{Mk5w{NQDLdzzseu*k.DTeU&vSknDY]IL7X`u6~4' );
define( 'NONCE_KEY',        ']BnGz4W?jm(V@w~qIezSVz @({@slEeZ5CWU9s<qw<K`h[WAVFzDzCvE-<S:=/hQ' );
define( 'AUTH_SALT',        'pjpXd7%@F$VoZO0E/QjyT$$~UM]ahlbLy<1j|k&j)GSqIDCXU8k 3+FAWqD<k1SQ' );
define( 'SECURE_AUTH_SALT', 'd,&5d2dI9>YpBiTe^trYZ<@.0WdzZ7!%?PmgkCa+}FJ6H>N>O-e0*Iy^l^9-o>Mg' );
define( 'LOGGED_IN_SALT',   'h!bi,KYpMjM/vw]?^,i_R}XqI:V/.qehVJ;OvmzFPR`a#2B0F:1nu1re913di{@Y' );
define( 'NONCE_SALT',       '&$(|]rEd2:FJfSuHDtad372}+ED8S^0`?cm!p]vldW^HbhKcoVo_%p0ClM=l~h=c' );

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
