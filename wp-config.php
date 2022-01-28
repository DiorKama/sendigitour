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
define( 'DB_NAME', 'sendigitour' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '0M2a-_%E{WyO|8}i9*.b8%;ss14Hn>!P*S6:oKUxeTlLnKMs:q_*i>nisP{6n Tm' );
define( 'SECURE_AUTH_KEY',  'YKn,wC24K2n#Mme{jfd+OhHf`3TEMFi&HiQQWfq#G!u1BxLn:V{$BTjSL%isq5vm' );
define( 'LOGGED_IN_KEY',    'TDklma2[w7 4/)u+dAPUX!bf9U={oj7xa7Xq?Wl/ D[-(co4(U]>X*gnwWN/]t|9' );
define( 'NONCE_KEY',        'zn&;_z?XK`;=;$?`-x.~oyuZ@1Qm?XE>)4j;ppptJ]mDY_|XF(Z_u$D0!4b0&P-t' );
define( 'AUTH_SALT',        '!<]qWp#1fo[So3I/&_HIoFN8MshIHbka!(PIRzrd>?M5V|9kM%JZtggSUz;:p2+g' );
define( 'SECURE_AUTH_SALT', 'lq}79>cNZJ/!mFHD;:I*d&0kv*2r@Q1mBWgh$1 om,bDXNp3ZGts8((_kt00F)VT' );
define( 'LOGGED_IN_SALT',   'uh~|n&78<~TGInL<Ug@BmcR_r*=jh(O4Sxf(Ai.?HK*oQaS;j4p=~H5kN-Km }9%' );
define( 'NONCE_SALT',       'T3B}bFdMm%haGNG(5+wR^,,W]X$SESTagZf-pyL7.MNtc8[^9pL6`yVVtm-#|kbL' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
