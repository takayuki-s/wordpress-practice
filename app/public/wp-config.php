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
define('AUTH_KEY',         'q1wm4nDe1L5hWo93J9CewiOQDSZqcrvL9Xo8YVXkBBCqaS6Nl+2og9d4XmOZioLNBn6ihj9bTMXY/tg2Z81/ow==');
define('SECURE_AUTH_KEY',  'pM7NgFIkazPV9gSMpenLD6JlFQrvJtXSgNY+Tu+S9CImpYBpdPEUCCd1CWZJsHi6UUSjplejxkUf6ezy1rW0Pg==');
define('LOGGED_IN_KEY',    'kZjF0cbwhjRaSAu25TyZa8BiF94uofElfWra57S5jtFo6SqR91PHW8EyjXNZaWTIsCfSNbY3SG6VrJP3XCBsMA==');
define('NONCE_KEY',        'bIuL6L2YC5BplewccotrlLbDCmBxJdt5FBe9gLuKfXD8+E4ft+ZTMP+Brnd3VUKUGyXxLQz25nNZvT81DrHBSQ==');
define('AUTH_SALT',        'zAyRbru9ABxRmv/1ClBS9ZRTUmvmnQfwh6EiGwv0I8L57rVZ2o2wQ6a2ZmfxVW5OxoiVSlWfzp9fZMntcv+YDw==');
define('SECURE_AUTH_SALT', 'sSu26U4yGdU0L2PWq//Z+NNHQVoqo3BLGzCLGxyzUjx0Ohn+++iQq+cBFhUTKrHMXp2ZOvtm9KAOH1YA/uExXg==');
define('LOGGED_IN_SALT',   '5oJlFTJuGrSeMtG5W6EYxC66Ps3nnQvLxbq8zVUtXVXyoJulvu5Z1+tCOBVBFky02L1E0MWG9vl2SUeGRLzWXQ==');
define('NONCE_SALT',       'UuqxuqUuI0GvDLrSdZ0nGslIeGHghVMvZwjcq2iSIuX3zQiCPo7i8lAP8HqDO2J1SbDEdj8IV6VGpeHr14VKFQ==');

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
