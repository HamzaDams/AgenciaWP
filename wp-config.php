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
define('AUTH_KEY',         'IgGMrPSHxbgNHILrheOqRpi5iTVqUgeHt1QQ11/h610RQn165WfhVaiaDtQv60BHJ4n47S9QYXMF6sVVVi68fw==');
define('SECURE_AUTH_KEY',  'n7buWhO162fBtm0PEkdxmq97la2Y/Q0jJ7sWz8qyDrjY8RmauYPSklc0E28/S+enNSQmJHRxCYR78+2x9B9niQ==');
define('LOGGED_IN_KEY',    'f+OeBeS6+/uKC+u/9Ho12T/nFIpp61ypSqLTwlxSZx6ZYktcigwgH1El6lSLgvqDkgeSjGdsq6zmPDMCVLAJzQ==');
define('NONCE_KEY',        'yd+mJkqTSWBgg/CLeGebQxWk18QbVFBveSbbDmnJjbFRQj454nihl2oG1fFRn/SD01+50wa5cYTn7qtNUbJNCQ==');
define('AUTH_SALT',        'ZRYwlYvYdQ3nX+nwuleG4VkgdH1Dcqu+OuCVJPk/+120m3VPIJr1ZqiP/3I7KifhqZPC04KWTzS5OlA8bwv0Pg==');
define('SECURE_AUTH_SALT', 'sFpuu2kJGDrd6SRrqOU6lUQ7Vu+G49SxLRAQn90YiIHVoYiHe1Jh1QaSeWgPpN2bPRLkjFct5105hR6kbxO12A==');
define('LOGGED_IN_SALT',   '30o5FxxG0Ym4SNxx4Z9uc5cC5o2o+nCnP11tKCJZ+mXdOOO5b5oSaAgf1JTadgnqeE7t73/SAT0O3uP+NRY6SA==');
define('NONCE_SALT',       'XaBvy5ELu1edTCsReFJHaPEMR3lB9YboBiqbdkyGszV7yZCj/4xtC1CXh9OQ24ir2V5ItYh1aS3Q3q7W1ujThA==');

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
