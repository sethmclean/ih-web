<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'icehouse' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'icehouse' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '&qZWiR5W=6BsM0A$qD*y%^XmhnFMnz]fqq6^CcX,L__?>?=E7C1llVD&aQfO#o+r' );
define( 'SECURE_AUTH_KEY',  'tRNx?~@])|:[V(qS2,Ii<TgX M)X+*P>@zA]@|I~{dN:!3-@jqfc2d;L;1?q9X]@' );
define( 'LOGGED_IN_KEY',    '$QJ]unb;Bj5lJPk-6tVNGY?84Se>d F eTammI`_wYl}nXjuLwFev0DpCqfJ,h%u' );
define( 'NONCE_KEY',        '.%k5}oqf65yDVnl.^OEE<A }>oag@Pa/3VFmtX4`]>2m89J,Fi&L?n=>9*O+ICy*' );
define( 'AUTH_SALT',        '|2?31L]_hNKGCg7=i}INT&1b*V+m3X@C$brNTRA!i;yg)BE>w6LqIgPEqZl?3@eo' );
define( 'SECURE_AUTH_SALT', 'UE~OZhXMsr@;1f JJw.;Pfc1 xq2:jdr7[I!#@N=:qdKB7x%G8}@G@dW~U1pK:DP' );
define( 'LOGGED_IN_SALT',   'MKI2%lm5wWuQn!fhBQ+0 _a{8x]K^j=~$@C-uva3ls`|X!R>~XTHu Q&T1;QME-%' );
define( 'NONCE_SALT',       'mzC~xf%CwMdgeZ6aXAeL_>s/D9u(18iq#8_85Hy,g9}yuRttq(=<gNpzCB4hHqML' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
