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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'iqpZZHq81tOfC3XhrwdthFuO9pkD9EwGVisatsNjlojKcxUHFN4w0Tjm2mCVjHvz' );
define( 'SECURE_AUTH_KEY',  'nnFDleZWnN1P4uhkRqycHbGSvTLX6YZm3tYhbHeJOImz3VTWzASG3eT7DeOetXts' );
define( 'LOGGED_IN_KEY',    '7nPrUZrf7fuffkMTSsfvmdPFSJQlBStlcP3c0EmIgKaxS8mLdbU9YedAiWz3pxNO' );
define( 'NONCE_KEY',        'QdkjSoJLSmnhdnw6lTuab8xjpIHizYB4MFkEvyGOI9t696HGNCA5PAeqc4WE2PvM' );
define( 'AUTH_SALT',        'NQdGDlUK351tzYUEXbCp10oW8F2jHvpPeU2HD2mKa2rCjpasW1Nl5u5KPdEMrcV0' );
define( 'SECURE_AUTH_SALT', 'VDOoovkMs4BELEskPuuwzxbREhfe73yeLzKkJc1iEG12zx2PMDgYRclPGwsSiahF' );
define( 'LOGGED_IN_SALT',   'cz8s9UWR9j0OPqa8XQ0tSjU42Am3MA3gmEuyO5Bs90bgUvgMjwYZdI5HL1mUALyk' );
define( 'NONCE_SALT',       'WWyAR2d7DqBTrtohPi7Xnbt6UWcwfaxa93hvP27qFYa6vWDyT9o8fF8SxYyOacDp' );

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
