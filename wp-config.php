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
define( 'DB_NAME', 'parentsandkidz.github.io_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '2QjI3qXzr3Q];`_EgfWzdubw?[o(9T(1Sb]uu9VH=-G{O.{s/!<@Em~v@c*#6IxG' );
define( 'SECURE_AUTH_KEY',  '!J2 (lG@nkFNh3tS,Arf0W{(j*WhOX/cA!@RE%hN>w6jJ.nPta>W2#lOIbH=#<]o' );
define( 'LOGGED_IN_KEY',    'S1Wh4639$_*~#X$lhI1QaKM03M/vq?fnl[,[F#e3=>)Zze}T}J2mO6~PAO33f!]H' );
define( 'NONCE_KEY',        '-F6O#+XS:RWTO2PnDH..d:j{#9}gk#Hr7e5l?F1U_e1iD1/v(7Zic%YHbDAHrVr(' );
define( 'AUTH_SALT',        ':NXX#*TH9SA9PLu?vMb|-Eb_lvB^-o)UMP93}N%Dm{? qe_}Oqi)WbbE/-ZiiO[^' );
define( 'SECURE_AUTH_SALT', 'Om<W~LyU3U.V]m9* s#D0NZPg4L{r<LCO^V@Oso.XAYDHMt<4I1*k5:I5d?[7@mF' );
define( 'LOGGED_IN_SALT',   'c`Vf<6_{h5zF_IN=2?e+%J}n+%H`+M}@xKHEOI2s8s8gv|)O=Oag.ydp/3wt.j=j' );
define( 'NONCE_SALT',       ']xF;em95hGzdmo%/9C.wy)4fb9cz09(2xRK+[,@vf!GR$+3UJ@j[PZj72,3?(?kx' );

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
