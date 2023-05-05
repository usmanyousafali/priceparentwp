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
define( 'DB_NAME', 'dbs5064831' );

/** MySQL database username */
define( 'DB_USER', 'dbu2532994' );

/** MySQL database password */
define( 'DB_PASSWORD', 'kDAZ%WKxWa4D!qjpMc' );

/** MySQL hostname */
define( 'DB_HOST', 'db5006047441.hosting-data.io' );

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
define( 'AUTH_KEY',         '9.0>*<bdaWr7g qD`gk>kd;0rs.[wejnBjR?t&IlXPC)^]Eub|-R|IBustNLU^}#' );
define( 'SECURE_AUTH_KEY',  'o76e?Tu{)uy8mdiFT h&DAQxYmo-7Hx?8U6M0+`^]ELT*p!r8apJe?Z6dVryaG/t' );
define( 'LOGGED_IN_KEY',    'p[0H?L>_@kFl*VniLjA%U/G%%AN1[>Kj?`K]CA(&0U ^sbO$.R2GFV[Nw7aTw0Q#' );
define( 'NONCE_KEY',        '$0CcPk9yt&3<yt_WRCF<F}l@K~3?uc^L-A!>r2CRq$!AFxeMUN]*BYF{B[$R0Da`' );
define( 'AUTH_SALT',        '=a{X0>;_(3?pnInpeLhYZc<A}9 G~9r6a7HKwn(L0srgaB#!d{WPab[m!3f!%uM2' );
define( 'SECURE_AUTH_SALT', 'e.}mc$+fFpqy(AWE`wkW Wzb%Z0Vr:p+iJO^Gx%tv;PNtG;c{[{JbsF=MTgs~$A|' );
define( 'LOGGED_IN_SALT',   'a~3MMtC6Czkz>D{9$XH)45W+b,IyhG2%tC;u;C%) ^<U[W&},CN73277*}|pj!`L' );
define( 'NONCE_SALT',       '0_.<j;NQH]:rEqa2uXp=+[7CNAMJr7:c<ZE#:4/?1q)<*anrMy5/|ZElt ])lz%i' );

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
