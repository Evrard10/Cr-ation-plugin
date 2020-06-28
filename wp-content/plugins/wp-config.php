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
define( 'DB_NAME', 'pluginWordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Bb@0770560063' );

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
define( 'AUTH_KEY',         'g;;&0Aqyt>Z,S-F>e#j@pA0E7JBB]v(9S],J/dnRkePDsK/V<SjuF@m/u>{&4xRK' );
define( 'SECURE_AUTH_KEY',  'NBIV*j=Nt$|/2?h65jx)D+M?C,[i1pwwaoe#^Eg*:CJ_Y!,N?wLpTPQgJSkrr/, ' );
define( 'LOGGED_IN_KEY',    'h;xW@i7U=5_#;-@ZB{Lbw{e6On[ZvIzEG-UD%(bEQuCryiXu3}[DW`OjZkUPw_p>' );
define( 'NONCE_KEY',        '4]nchpu_7uz[Mu^2~GGYHCjEkRMpt!Q]DXr7I0ylMu_`(BgW|(=)*&vBY>it[$8)' );
define( 'AUTH_SALT',        'gJzdx{kq@ezMUu8AlX9RhPr0-FZqI:OAbCBpng/[zJk7~@E |><wU*;,DsPwzh&$' );
define( 'SECURE_AUTH_SALT', 'gc2OBQRJR[!zZ&iq>z+$M;lHeK@F#Z=b}vsZ;nJQHgoJ?M:lNr4|tkeXlyi]rI^X' );
define( 'LOGGED_IN_SALT',   'G(9I$t`ey=,xlR8z(@`MA$o;XNts#h}bVxl;dl@B|P,Ci{6VT}i#|t.:.dodr%X%' );
define( 'NONCE_SALT',       'z`}xs&~ aSGg6NDA1#tFclDQMJ((@r=F<HAJd0zt, HgZzmBuW0?DROB`cpw`gMJ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xyz';

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
