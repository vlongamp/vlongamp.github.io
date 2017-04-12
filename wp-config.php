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
define('DB_NAME', 'u967715405_epuba');

/** MySQL database username */
define('DB_USER', 'u967715405_yrepa');

/** MySQL database password */
define('DB_PASSWORD', 'udyPabemeq');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'ElMe5jso3DxJlTFSTunXLNKIdPFPCDhbx7mqCsxNVmguk3gJNLI7gSFuMlyx0JiW');
define('SECURE_AUTH_KEY',  '3Au5IVyiEwcQmvWaIYsRTyFH0arMtmz5xOjWSatAWkuZQ3sWd97ABMV9V1i3T5iT');
define('LOGGED_IN_KEY',    'bRnXwNgNR9U3ssLvfWPw6zVvhymIWXvVQGsGIBKTL8t3IX65f6INOUMEqTnRqblw');
define('NONCE_KEY',        'iWKb7K5bRiZUOg2klJe9nrRI0deI3o9i0awcHWIFjeXsGYwj3kQepLHQchDBAsaX');
define('AUTH_SALT',        'IOHThjXZmLkTsh1QmyeHwtxOzq8U7XOf6y2KKHPnKhhG9qUAEW8Ko52GDUWCkiF2');
define('SECURE_AUTH_SALT', '7ms8v5CCGtIaDp1c3kRBeNEre2OBK4sMHU9ad9CF8iVYExUWS7Zu7wBOEhnL7IH0');
define('LOGGED_IN_SALT',   'ZahIwQMbipDiRj0NpgobeGSPqM9DgsiheuhMoNNvkmbgPl0rLucMhdQeB09LOUvL');
define('NONCE_SALT',       'RY99TSh1oz0H69gjF7vhQk8hsBQyxs87l6l3sDkJX4RLQmNMT2j5YYg4GuyvmSqZ');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'y4rd_';

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
