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
// define('DB_NAME', 'wordpress-32301f5d');

/** MySQL database username */
// define('DB_USER', 'wordpress-32301f5d');

/** MySQL database password */
// define('DB_PASSWORD', '0561d4f724d6');

/** MySQL hostname */
// define('DB_HOST', 'shareddb1c.hosting.stackcp.net');

/** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');


// ** MySQL settings Local - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ribolovnicentar');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345678');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'lJnGFkJyDnHYb3s+0X+OXT2akV4mOt/2');
define('SECURE_AUTH_KEY',  'GJSX0y7tTefRcOwwYmfLfmkxD3j5Qf3I');
define('LOGGED_IN_KEY',    'a4QoPbkH6WBfBz5TfNdI4nM/tlgONz74');
define('NONCE_KEY',        'HAn9b7kjGTl7ICIgZlXBFoEXPC/P2Pw1');
define('AUTH_SALT',        'q6/uoUSGtc4y328BSB4ujSrMOBqOjOSw');
define('SECURE_AUTH_SALT', 'HXMwSxfiB2llvZhlLyH1GFu1uPMuDvNc');
define('LOGGED_IN_SALT',   'QWrVFucGogjo9/5uy+yqZB+vbHVZBOds');
define('NONCE_SALT',       'rWwj2gHPqws2hIUK/g2vHKnLOtqdJCua');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


// define('WP_CACHE', false);
// define('WP_HOME','ribolovnicentar/'); 
// define('WP_SITEURL','ribolovnicentar/');
