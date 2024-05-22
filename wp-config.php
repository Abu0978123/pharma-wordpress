<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         '1&7S3_k6;x~xV;d/S4Pw%OkS _oTYs,-iqIJ#uU$3nu$0Uu?ofl4R5=?$hU[By9^' );
define( 'SECURE_AUTH_KEY',  '0;WcyJR*XbSeM) |?e>BRpN#Xc3Ze^ofPFh)GV-nX{[lG0#Sj!Jb9U(*2T+7t@`p' );
define( 'LOGGED_IN_KEY',    'm135p@[{iQa|};{UGCXT6W}Z`zrl[y<r%H9wECmr{|@[s`Ft`A>OsI-%THCT>C?s' );
define( 'NONCE_KEY',        'ZqhE|vl/gI8-`t$gTNlcgQrfrUwHl=Lm9vO<Z75`rpe(6I|:Ux[zOI$p|jjQ+wEg' );
define( 'AUTH_SALT',        '4cp~R>Lbdv85,:nm`tb]oUwHX=KI_~=w#^~c@R]^gBT%BP?nm%POmgdj[;m!AAqm' );
define( 'SECURE_AUTH_SALT', '#%QS<zxfGLH7fH((c}wvO}aOiP(Ru!s_FDTCeT;0kdJ1Tm!rN@l`Za4$AL]zC7JR' );
define( 'LOGGED_IN_SALT',   '43Mk:%x?=gMbFMBcz|2:V1##d`$:L?2-236Izs=T(/!/s+0Xit53 r-=mPDpT4wo' );
define( 'NONCE_SALT',       '*o9 3-d?0m)k6=euM<bp?$U+QcA<X%J=+{(HX#&6J+{a>~Q&RQ<kW1Y(`%crMd3)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ecommerce_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
