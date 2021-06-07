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
define('AUTH_KEY',         'XRgNSJrRVeuOUBTPGnWP+TaLsAx7qOOVUuEYB9FCib1sttvSMLXBrWRtkZsy7vPdvQKniTJ3nPh5g2WS1tkwdg==');
define('SECURE_AUTH_KEY',  'ayzpqGLVa3md6iu4ASSWNLJw47e3jRILQHec8oCglLUJKEQNWWC1HJyR/04PC3pht7IKcCAJDUYQVSByMEhAtQ==');
define('LOGGED_IN_KEY',    'xusX4bcm0A9kB11ilA+WVDPib566Yhod+dYQKK8TigHS46tHBku5PukisY63UwBm2kEE5nG4jg6OvJuOTZwpqA==');
define('NONCE_KEY',        'J5xXit77Z40klN3Epr5Ua/3J6BJlmgKkKDXVWn0tIB7poJn6EChesBrqJ6gVDgV4ZwK67W9AgV4W49ZyE/9q9Q==');
define('AUTH_SALT',        'MnwrF//V2soXxTErLeSXWFXEeipf4Ui+eY6o7TZUJLcbFsPBlmn/0NZZiSX0MPncL2OSetCw1a2uI3smHKCtRg==');
define('SECURE_AUTH_SALT', '2lUgy4NODzjW4TDwBedpO9vUtIvpSA6mwbZEMLCGGJC3a9GcefagXsO0WU0b7bzvL0U2uR+16o1yfUMHwy0dEw==');
define('LOGGED_IN_SALT',   'CANvFzgzsQcy2gdFvpqwxTHbMQUL6/PHRmZRNGY6ctjUPN+yAm468toPnhY6tXOQBNXhUvmhi+qU2d2Gx7/7Lw==');
define('NONCE_SALT',       'MSKZ9n+mE/Uc+XGSes2AWqvIRcNEYGlWj4W3GAlB+MbH8YjZl3T4Lp8yqU/JaHL3EQQRmKOoM2OUlrtQ77caFQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
