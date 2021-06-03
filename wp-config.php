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
define( 'DB_NAME', 'snowcamp' );

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
define( 'AUTH_KEY',         'L+x3g,;KKfFm,5`#-/cnP!zJ&Z qBP<k`#-_&e(DTAXQ&zn<]bM.{My$e-w cvt[' );
define( 'SECURE_AUTH_KEY',  'k+2TXTr%CENI!f2v4R;c~&N~|fnoH#MQi-<ixOV%bo,Zmk;mp2oVez?0tFE>qA<4' );
define( 'LOGGED_IN_KEY',    'w!T`W$,Awwx7F4}0tTShX:F2Ib[.zU?>n8p%[i}Ye)=K@HUAQ%`ID&p2TMnoQDH-' );
define( 'NONCE_KEY',        'zDJ7BU>k(mzPQeaV bm}?B(!3;%x|[1)?qY7]]Mmph5Z4J)U3H_)ib*<W}*XG>Fd' );
define( 'AUTH_SALT',        'y{bdYt1R7cK!1|v!&S4}UbAi(3(/EeSQ7ZQi/Vsz06MDkxuZ$*%[/!ERH>uYI[c=' );
define( 'SECURE_AUTH_SALT', 'IJU<o#wn2a=Ff^K/@ZhYn1FIlK:#OU?FlDSlc8{Lh^NWHF-~rk:#mkSCMpK>O,?N' );
define( 'LOGGED_IN_SALT',   'U4NUQY~3T@0/|ym}:5~dF:r!1?)}tK,fJ~[FM -4XDxW0exsS3,SZu67ThFNrHX`' );
define( 'NONCE_SALT',       'SV[yQ_o?.!{cfEv)CB(%5Q#j&U5~_r@`3QQEz.x>{]4Xbqh:u<xE9cr]l}E:QKB+' );

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
