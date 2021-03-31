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
define( 'DB_NAME', 'myproject' );

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
define( 'AUTH_KEY',         ')cD*|icE4vZv_|K%@]u@B,%bL,G#~G`:YfH9Uj5(h9j?mHoI$8&9yrR1ir3wb|9M' );
define( 'SECURE_AUTH_KEY',  'u,BcJ*w&yMt6X+6+P(,zn:jKNLjOzskY(4U%r%Q2*,E2q,0%^#IDinZ=uf<dSBU+' );
define( 'LOGGED_IN_KEY',    '2;s2CCcO.9F.@qs@%0)LfE4fKI{L.BnH{yV{6xk=y-fSj*+g/RxeD2]e(t2S8uie' );
define( 'NONCE_KEY',        'uF6tX9dSZdh.4%=]FffleI>sB|vP$i18TPGt=/O(@e5{{ncd=3?eChU&+$pTf%R7' );
define( 'AUTH_SALT',        ')B|YR+1O8$;)@fENF _ aeqc#M_>qc@T%~^Vu.TbPKAfE2>58>gOS&#,a!5&4eaI' );
define( 'SECURE_AUTH_SALT', 'ws0Wt0J!hOp)[Bg&Jg]T]zDG1F!&L;}!7e*u M#,25$Nn;XIm)!.j.XePA`saU6 ' );
define( 'LOGGED_IN_SALT',   'RY:l+mF.#<G!Kx(QY}h0yLpSpQPw`T #P:G=I7!}D[!vKvP9r>fc4@82v8fb}&37' );
define( 'NONCE_SALT',       'm/ra]*aM[?f,%aiwi90:zUVBo3t]-R7q3GCl&]ypy#Rk;7l*qXCU]kpo4%Gt:/(l' );

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
