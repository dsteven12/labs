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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ilYmpQ3pjwM/klOC9g/FxIk5qJB0eMOYUHRyDzuOvPh8+cIT2rqyGTVhxJGWt0eD+MKPs4RKBOqDIpNgthCEww==');
define('SECURE_AUTH_KEY',  'PI+WKcpRt/pkV8dSHSBHOYlWZNqgPHPoky1FUO0BWqKPvQq2svgxjtVBxeOg/NB/clEkt6ZfjbwaSR4mf8hXYA==');
define('LOGGED_IN_KEY',    'AUltY1aUsqgyh5Ik4MEk1rjEKQwQ0TlIq+tjJobBwZWmv2d8UsqovlrddrayKj7eYdTm5xgd5pMEJajwcon3jA==');
define('NONCE_KEY',        'Z+1QJAM6nW4jY0uIqnmPAW6JotWkzUenJ0Qxa6I7R9a50jX3VTDdpUBdFq/ynClQzJO9a4u2Vz1Ct1uz0tRL0Q==');
define('AUTH_SALT',        'W3F0ATSDbJ0Brdy4CVer8JhLp5c0I6Ia7aU6iUcBIW+om9SLQufe0brLx6HM7nIwoEDOIPQIDUz0D5gLU1zSQw==');
define('SECURE_AUTH_SALT', 'W+MAPIXS09K9r/VRvyifw3kkLnT7SuGJsjontRBGQCmY9h2z3wGcv9CC918NudZ31wCKUynuNutg6BS6EsB9Vw==');
define('LOGGED_IN_SALT',   'j0og2OCcjjsmNcw1AsvyxaHzuYswHLkrlUlHVc4ZYaP4w0SB5+FL5v8dVuUi1riOwbBcA8G79BIlGrg6XEDsvQ==');
define('NONCE_SALT',       'buTaTA0W7XRMr4wIq0vFRGzLA5IsTsQHG4OJxG/YmB2zJKa5obbYvqRM/mECRWKGKqV2UkIsuaYu2ZMzvHaDHw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
