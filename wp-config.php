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

define( 'WP_MEMORY_LIMIT', '256M' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '');

/** MySQL database username */
define('DB_USER', '');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '8bP1FreuHWHCwiDaC3uqxvR5zWKFWwBpZNjRfiV14P7PdNmDbse4a0n4aAwgN7Pz');
define('SECURE_AUTH_KEY',  'e8la37CSi4Gcbx73wfZZpVBUF6yVeeegeZ1B99fgGYp7ehbXthsaqIPmsiKWp6Ee');
define('LOGGED_IN_KEY',    'HAgtyChbAvI9BbSXxaqdMZp7Ds4jwCAp4j0zBr5WiajzQbdCTzCeWX63K2h9RVGo');
define('NONCE_KEY',        'KaMde7wQT56Q0pxF3cM1lYAgruCsqQDwR2dK2YRFRu6RBzDab5kbx6c1IVnp31A0');
define('AUTH_SALT',        'ZnaVrlQ3ZMAmAcHSaPVtSku5ImAA268Ag9Ang3dyBldpkq12zinqypopBysR9dGu');
define('SECURE_AUTH_SALT', 'rUl2y0LmydC2M9ddKdVprFaTazoWHA3FcHdZ2tSMg7BE7g3kfv15RBIxRqLcTKjm');
define('LOGGED_IN_SALT',   'ye7vHvWoDFdOzt2fPfz33Xek1ZyuDZVLzg09AOm4XeMwc9v2baMke9qw34tynt0Q');
define('NONCE_SALT',       'Bg7A0DJ3WpTAeRsGeqtODHsq6rnLLm65Qjdw0gHFrTiWTxdGLx87c615OEsjw3sI');

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
