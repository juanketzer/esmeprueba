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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'esme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z/*(jd= T<*.GUtPKj`NUVX5tI_>m#1E^N3XSE&|DOXT2Bo]8giG2}nqpx7|`B{5' );
define( 'SECURE_AUTH_KEY',  'B^BLa9-m0:^?bahr#iyV:W<vcB-rvuX&_V.a{MsqRCDL*dK3wjY&yl*xHMxBe7*f' );
define( 'LOGGED_IN_KEY',    'o9hcn*u:ik3.C[Y,VLwF8s^@ft^Lj@<5Nr+hWJQh?iV.Og2*+(;oiM=/*0KXg@@j' );
define( 'NONCE_KEY',        'kZ7NK{z`UGRO|nf[]KK{${=;C/(p21o}4ov~^`>6mOWbQ5gefE2Nhph`R;}s8KM5' );
define( 'AUTH_SALT',        '1HxQQk2zp@iX6Xu*o#nI-}0&DVr d79L<vn6P7kUm!AN<rlh4NaD8{h`jno,kvU[' );
define( 'SECURE_AUTH_SALT', 'JnIVL=,*aa`Za7RVej)[79zq+d,0dMc?;e(z! f~zJvosmGq`tH<}-kk)=,M.vL-' );
define( 'LOGGED_IN_SALT',   '+E1O,p:tJ2socCI<rX0CZK4Ps(uPf9R:nc<@tA!AgNJD#:O;*V$:zD{`kf28DmqS' );
define( 'NONCE_SALT',       '1k(?8b!E<8#S0v~7l.8yA<B6Y5F48:hVS=BE~OR}zU;h{MkgizBQga#v4,jt(L+o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
