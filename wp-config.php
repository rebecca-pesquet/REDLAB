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
define('AUTH_KEY',         'qVjHnroGgxBmd32eek3jvHY3Og9nDC5lbEdHs6Bds+lhFDVI4kawSp+vjy9TsxmeMt9bGf6JWi9hA0LiRdWBOg==');
define('SECURE_AUTH_KEY',  '0VOEALdkxvNTKrJyPUZ1sz1rXVyk+gpkl09zulI175j1zSIwR57qXK3dT/729ySC9ZQ3D4zP5+NOMr4W7nUVHA==');
define('LOGGED_IN_KEY',    'O60PgGZCikGtZtLxOUuIT2Uxp4lD52svEbOwCyFGRprhkCaMd7dGHLI3Eu5Av7M52K7sCqtDUazGKRfFAtnNRg==');
define('NONCE_KEY',        '71rGkSl0t4BGYmCmJG/2jCjZ0EcQSY1+sOQO9CL9dffTjU0sbywnxemfRjuzKq/0P0cyPCtVJ5PCogifS3IX9w==');
define('AUTH_SALT',        'XqYP4o2DDjbCS9Kw4JmQnEDPJcr/rD6K2JGZnKVPVa4DTVeu3ACBC7GMiZuqOrSClkAeCylooQKkQYaisqx23A==');
define('SECURE_AUTH_SALT', 'GuEqm7dgJaXiEec/lMxlljbaXEDxHO+CVIeaxi9Hjj+nasDppJIAWWnoeBoXxVgBkAXondf5oFWDL7T2DIdnQQ==');
define('LOGGED_IN_SALT',   'l1glt6mbsytrrS6Dq6f7WieZ+rd0XPVxcp7Q+/V/ebINtk/tN4jbI5gzosJ5VrtyELtv3kqKT8ZXhn/CNkRDgg==');
define('NONCE_SALT',       'ltFDLVHEBdmfG2c0RgzzbFj+oCNMMz/wrumemear2fNGAoYwNaPO3j6LBGlLm1ZhiqZ6gQWizPMn7R6+qkIhQg==');

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
