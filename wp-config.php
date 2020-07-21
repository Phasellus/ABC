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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'softfusion' );

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
define( 'AUTH_KEY',         'k?FwPiIFY9,7@I?8v[tc{M(gF[7BZzWy9,(d+gc!sM|yp3au6vOiu/` *hyYyA%x' );
define( 'SECURE_AUTH_KEY',  'IMeBtcIFsoVy|@]`UXO7gqirHt+_)^3Axt&K@MS*>znDP/FDCKf+?{Ta.<{6RqWZ' );
define( 'LOGGED_IN_KEY',    '6_L`{?fD3N}E$+{rn6}3;*~(S87Y0:nf~*i/rnCPWqEcwTg$6VEx6~NydI7Piv_g' );
define( 'NONCE_KEY',        'EA>bdqI![#n]S[8YSSRQ!|$-SA-m1&#!9z<=%am1hNSjy>Y[z5.26#+1l|@+OUK8' );
define( 'AUTH_SALT',        '1QkL|jlh;rs`]WdNE :_JWu+XWRV?8juasotZ6tQw5aD=B+Po~~Lc0,n&(X6WWX~' );
define( 'SECURE_AUTH_SALT', 'n}`#q^ jTRP#vo,#gFvo}{G` mJ6thV>ufH/7ORR$z&0[vnL_m%(hr|.5Fjs:LtS' );
define( 'LOGGED_IN_SALT',   ':4M2luE.J+c sSba,W4W,r} -V3fKTcK0HYG*R;!@t]8BYi^gE>AMv.U,NY[/Lp~' );
define( 'NONCE_SALT',       'Q#eGySU;`OuO@a&TimNR^z[}(q;3g{7wwn]Z;N 93G8tg4tYwp)M?o>j{vG%`X-}' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
