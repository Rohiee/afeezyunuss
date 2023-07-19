<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'shinotec_wp38' );

/** MySQL database username */
define( 'DB_USER', 'shinotec_wp38' );

/** MySQL database password */
define( 'DB_PASSWORD', '?iT5]~Y_WG54' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'hkxverjs1kbo35r1rgyec2qjwdhimgsgzqcgqzxoj56sqsxp9pd7nuoklimue5va' );
define( 'SECURE_AUTH_KEY',  '3yhzlootxp6gmmnp1sasutb71omb4ncg6d3rfymrejzep07vxmgvzfn5vn2p7ioe' );
define( 'LOGGED_IN_KEY',    'ixtrpfytafojqbnmjdlawgse7r5ddu08ykw3cppnsufcnlxrscwyjunzn0j7mc4k' );
define( 'NONCE_KEY',        'qtnmpoefkttvicwt9psetxhzbjs7dxydqse1ecf3z0nws6vhmr8yzc6jorgiofbk' );
define( 'AUTH_SALT',        'rk3fqastz5hmgcf7d8dsgguumpntur63c8p5xjqf9uao5hrgjpttmsbnotthy1hf' );
define( 'SECURE_AUTH_SALT', 'ngipjg6bojbqmx48hnvvsoio1qceuqg8bms7900adgetulozzmzgpztbc3exlqr2' );
define( 'LOGGED_IN_SALT',   'way8q3m9dujukjqm0dl37euvf5zzo4lwsqohlp9fgnuw8t1tsnyjmdm9hdtcbrpg' );
define( 'NONCE_SALT',       'qwadf2zp4wzsd6vpwsuzjqul0qywr4qr7knfezpi7565lhger7pgmj69i2brrjnn' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpci_';

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
