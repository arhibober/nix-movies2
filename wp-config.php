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
define( 'DB_NAME', 'nix-movies2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'D250o2_>`&D_HJ,/Fl64zUs;Dys#7rN?=YaHEc-]nI)9]e&nb >6+G::^[fden0Q' );
define( 'SECURE_AUTH_KEY',  'q<=tLo^&7r(fI,ldG4swY=CMlo{Eja/&@xbCPc0}5+JE[z2GElYtK^]|vrUH Wi/' );
define( 'LOGGED_IN_KEY',    'Z}Av3zBdLl&d^R6H_Cm+)9g~[Y>v0A.^ir7|#[G]dusE%+X)ibCtP)w4; }^zL~6' );
define( 'NONCE_KEY',        'd+J bxD}=cx@nqm,LZ)dsJ-D[<`0aAe0!o[[pdlbOP*W FEm}H c]ZwT#/ZUncws' );
define( 'AUTH_SALT',        '2xGG3z.oqsU7l:{}=COEU*jO~bL9<{I=]2C&AwI3,YSJ2g6[k})q:-2(cCmq>M{s' );
define( 'SECURE_AUTH_SALT', ']hd]75=8YYFZgJb_D&Hz<Ip6,JwL#Jdd|b!>8[n==#iN1;~L)-_.Bcx0%rHY=?x|' );
define( 'LOGGED_IN_SALT',   '.m+5u(8I)@P*n-dp&OtW-VEHn6_,5}90L@jo+322xctvR>56iCmU~00kPkdm7DeL' );
define( 'NONCE_SALT',       'qwyhr:OgYf7bjLm#Hr,]$f#BbsEJ0]6`)1*,dJuA7XzMWlQ>v@r^/-{w35]us6T#' );

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
