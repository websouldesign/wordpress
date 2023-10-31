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
define( 'DB_NAME', 'fineshga_astra' );

/** Database username */
define( 'DB_USER', 'admin' );

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
define( 'AUTH_KEY',         'oX5~{sO. hkQ0[DaY^!@@)j#Ia/$K_9uB:ga/SZfQh-k)u<70:q0nGi[o]8QI4;Z' );
define( 'SECURE_AUTH_KEY',  'K0_)mvom]DA`axMq>Q*poPV@JRVjSeplqXWtVx1bXw?/e-2]q:!%kOvCBAnp6IEC' );
define( 'LOGGED_IN_KEY',    'v:/uQ?5J$A3Nkc{6D[DZql](o&gx`p~Ew.v+yN^$i(7!H#etch6OXHl:;vS5QG!2' );
define( 'NONCE_KEY',        'K(M?a4)jQiK$x(A37LrdY.:h;4_a$a,:sM{Q8ho@Y<dZz!QLtFr~a}+$$2YN%qW=' );
define( 'AUTH_SALT',        'Q7~9IqC@6D$e:?[}2>IKl 9q1*YRv![6OUM;]CD4jW^|*b~oE:fXJV}%a?r^:|1H' );
define( 'SECURE_AUTH_SALT', ')>U4UaK((sd*34s/}{e{:#Mmmiw;f%$v?M;|]$o7N~xT}!i]R^A,c2:S#!) RZ+P' );
define( 'LOGGED_IN_SALT',   'z8W@hX+IH+{B)rSB#?@uoE7uZ^ERm#XHOY3^FCu+}HjxYL9Sy(B9%e-1w1y:(i.&' );
define( 'NONCE_SALT',       '^O%{`rfO` g$,6_dpi)FGV`x?u4LI0nPmPpi=3;v_7t:myM`QCQxD+QD96:&|m=L' );

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


define('FS_METHOD', 'direct');
define('FTP_PUBKEY', '/path/to/public/key');
define('FTP_PRIKEY', '/path/to/private/key');
define('FTP_USER', 'ftp-username');
define('FTP_PASS', 'ftp-password');
define('FTP_HOST', 'ftp-host');
define('FTP_SSL', true);