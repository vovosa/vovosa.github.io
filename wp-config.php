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
define( 'DB_NAME', 'firstdb' );

/** MySQL database username */
define( 'DB_USER', 'vovosa' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vovosa' );

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
define( 'AUTH_KEY',         ';:UJ1c%YwI/Sz[9T7NYE^;o..39,;s6%!r]rhE<xQEMzs=5.zC9Npi>+c(#EjKLm' );
define( 'SECURE_AUTH_KEY',  '*w&_NaKrC$tcHr4b[ *HhVEpb<zRWyw{*TJj6u k^*^~.s8se{O4X6d+4Nfic+V/' );
define( 'LOGGED_IN_KEY',    'PZOSGY3j~FOJ`$H;QgFrONhLENVqZ<;}iBl5wM HxEGF^UI4B E&:L} ]Ps;*Ems' );
define( 'NONCE_KEY',        '5p N%g{-cwYSJ=6mf):HiXNQq`$$=>gQg~-!vLax.yQ^PVSh5_5=9urPrMGbtch{' );
define( 'AUTH_SALT',        'f]a{!CcTG4BnluI(KE_Lr/d=h5TNDLuMYDp^h+4P@/<!7jYZ@KMCB:>-S86ZCw&:' );
define( 'SECURE_AUTH_SALT', '+eZW}O*bN]plFBuQLuQ3|/%sH3ofjR:}~IJ_b>L&xG%$st8ZSSyA.)7u;9.Pv0Is' );
define( 'LOGGED_IN_SALT',   'PDgv:Icqv8lOREV*0#iZ:h8jR/P?Qp!6t4M_]f2nz.[J(>_j|:F~vb?g0qDy)ED6' );
define( 'NONCE_SALT',       '|{+JoeX8k}Dn?+Ty7^t+G;QpcNWq-|41mp}{H<xW?8!E$AS|+H=GlKRpk?@D2,:t' );

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
