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
define( 'DB_NAME', 'pendulum_store' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-JD}}+lWZoYhphhmHBDf|w:_aE%#!J:,Q=W|7[lPcJ`<?n7L!-1w8~qKqD]/0&bX');
define('SECURE_AUTH_KEY',  'EE&kI=Ca,>q/+O%TE-D3!Mw+9&mz8EiPQg(-jCrz-IC`DG{nOdxXk8)s${|Yrx|/');
define('LOGGED_IN_KEY',    '1RfufLOve^kaljCAgHw9Q:Fx?|xNSamM)~,b`:<&TczDO5.Y}w+`O|w^(a(-mM.+');
define('NONCE_KEY',        'On`!SF|$mnii+#/:=f(mN5k&&aP- N8ej::),)6G3I.On{b20||RNz4x)*0D(=P+');
define('AUTH_SALT',        'jpyfFD-9w$Qi%K;d4s}lPCpwk1-uXoVpeY]GV^4S_c`%O1+nI8&GJ0WdL7`@[|s1');
define('SECURE_AUTH_SALT', 'bY7o|AJX;``ZJ4pSWSl8MiR+}B1r!)lDuOV91h~}Y})Rm5BqjGF-f}&KqIxv3_zq');
define('LOGGED_IN_SALT',   'a&>EeFx.9>:abNC$H*80QNHy,W}+}n#_sQrA@ArcL) 1G+GaK$%im/#tS}m<KK^7');
define('NONCE_SALT',       '&FX]f_kr~wp)TF<%i-HWF[]f4l;#kTXSbJXR40yWwau%K(d6YHVL:3ZCQOy>c}uW');

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
