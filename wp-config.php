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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '@%HqK,OoLYI&>0_p[%W<?bz<rq4;N#t=;Q:8Cm*|vkEd7P)h0WVR~xePde&=rmH=' );
define( 'SECURE_AUTH_KEY',  ';8u6~=#tKYr9Q-y;/a(ki9<M>N.n#Rg!?tgJq49TLj|4Q`(D;&M$8fy94lIJ3KFn' );
define( 'LOGGED_IN_KEY',    'P-j A-@`)D]]53n-/@x^6EsNg]MPw !fNALKGvm}ur!?s{CX#./Y`MOs8G!7jqhh' );
define( 'NONCE_KEY',        '_9jdk~`HcG{k2{HPZt56 }XJe>ACMN1qUtu08{gS);;Ag^&_IV_#91,5.4Jk6riF' );
define( 'AUTH_SALT',        'E=cf+Lw/(bR5oqQKh`E3b5P|w@Y|gg.iC32S;*xFDIGYP&@/gYJUvxEz%kFgY/&W' );
define( 'SECURE_AUTH_SALT', 'M p22.~~G4RuRd}34#5(yRf:]hti:nGfw-#<;{>(o+txqSb|J6kaHL/`2[x2Vx75' );
define( 'LOGGED_IN_SALT',   'bo}Qk5kbp0XWLZt/X;c*$q$w/U.ffE#x3|$)_;S$Oq$iiw1H_dsWv<,W2~a2[Yi9' );
define( 'NONCE_SALT',       '[%@eiI}QD@iSJ)=>`4DFN*pLsyz}E+=W0 4Qbg+dE8Hd(tD)a^#:N$MV,n]8Talu' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
