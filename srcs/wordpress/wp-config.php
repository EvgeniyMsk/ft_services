<?php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '${DB_NAME}' );

/** MySQL database username */
define( 'DB_USER', '${DB_USER}' );

/** MySQL database password */
define( 'DB_PASSWORD', '${DB_PASS}');

/** MySQL hostname */
define( 'DB_HOST', '${DB_HOST}' );

define('WP_HOME', 'http://192.168.99.202:5050' );
define('WP_SITEURL', 'http://192.168.99.202:5050' );
// define('WP_HOME', 'http://wordpress-svc:5050' );
// define('WP_SITEURL', 'http://wordpress-svc:5050' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('AUTHOR', 'peer');

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
