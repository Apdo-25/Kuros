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
define( 'DB_NAME', 'Kuro' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'nxWGjF9jLIqXavQepIMGHYxz2qVKGXnRaFPeaaKvVxXZGmXOfQZL2iblHamiGwlC' );
define( 'SECURE_AUTH_KEY',  'F2bZOMJ90ZxaRh31X59tGH70K736RZd7Yi6XU6xwurOwmNeCMUrYypWyDt6CWfZo' );
define( 'LOGGED_IN_KEY',    'OJYhu1WQ4DF59bLe8PYBMT0I9B1DKHKDlw49IjIV9le4HE3MyK5uCGYGrTa5pdsK' );
define( 'NONCE_KEY',        'QAt3NWNZ2FEwGd614WUqAD1svbRki8f5QgGJhJXYGnU24YjCA2kURUd3pKW5aa2t' );
define( 'AUTH_SALT',        'SqZN8SE9ZGDYeepMZ4QfpmScTLI3QxKvl1jkR0b2epAYoizsBhBj69tpoBI6V7zd' );
define( 'SECURE_AUTH_SALT', '3BQP2pS8akbOR9F4JNZyOA6mVTI4cKVPvGKZ1jcyMSlepFlMnWtDYOtclcXfrWFs' );
define( 'LOGGED_IN_SALT',   'j560xwtWzBj3yVQOhalkNjEWEzOooNL5jj2IKfYzmLbL68CAU1VQvWdohvHzGFjd' );
define( 'NONCE_SALT',       'ISGKDdsBbu1DlzY6DaUBmxzX2M33nDhcLS6v5Vx5V67zqCoRbtYXGvJ1cyU4Ghvu' );

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
