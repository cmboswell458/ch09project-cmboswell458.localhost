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
define( 'DB_NAME', 'ch09project_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'wj|q=KR$Jnu2E{AB}x$|.#Rli <)[[F70+/?tA]mr ,dz=mG Pf ;uC-yk|3FZ8j' );
define( 'SECURE_AUTH_KEY',  'I+@aM2)o $LPqT@x07scd5e,c)dtwJLJ[^[-kZXeJS26sm{0b1sLB5Wr Z,I+(3d' );
define( 'LOGGED_IN_KEY',    'Kfa!TGxCWw<II%Vc9c D`<XW,i!}x8t#Xa^W9nGw~y8I-$CuhX#b4N4,vEBGv54W' );
define( 'NONCE_KEY',        'Oi#u{1_X+N@hoXD^a^bQvCB[j)xIvm~^O2{N8W2hTsB]Ax&NN.<M^S7+S:n6>;I&' );
define( 'AUTH_SALT',        '5](#uyL^*$b@YJ6(uSo9gW_}4D-hL$wj75JAi4G7=D2BQ:#XuX)0;I.xi{s;ERPe' );
define( 'SECURE_AUTH_SALT', '*,*xA/u )aKg^5Brwm>9V?*~Ytg:fm1u8d4eE][z9:)HP@Vdj~4NVB%$t%t*adx4' );
define( 'LOGGED_IN_SALT',   'o0F2`fq`a@TMkL+C8vSkd~s25VN}BA~qVy@=7Q2[Q/cq@c!g`),=74o3cEU(c]lx' );
define( 'NONCE_SALT',       '5Xl*&2n9]A {e25!^C~ t`a3_%WiONcpNLulaTdHw.BLi&a .SwBX%Xv:z$|,*,w' );

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
