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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'm;obc`S 8<Cj,;Vb2i3O}]s5x~P4.,I3Sy`_*RP1<hPiLc}S ss.Clp  XXe`Je=' );
define( 'SECURE_AUTH_KEY',   'lstQN9hm$*FF[7G_,,A7.4{wh$&o*7){[apq5~5jr}<UU@36[A0&0/APtYPKX}6Y' );
define( 'LOGGED_IN_KEY',     'kV,0!GZfFp@&I<]F{;&`hn<yU/@t`x<wj8rO.>E#Wp|kl>fAR,sHo?Wj.Y-!F`yR' );
define( 'NONCE_KEY',         'ILlJ67Zy H1@pVM$wvvJL^JouEKgleCbTJM]2.Kh9y~(WPD2Hpcx`S68A/I$gf~~' );
define( 'AUTH_SALT',         'Rqy1t|`2~COK}ff1=Niz9$e45]pj4oNoPM7kC[]KG6HvC_0S4G0cuJ &@IxqcXU*' );
define( 'SECURE_AUTH_SALT',  'uC]r;}loxUo>LY0NKlD7pw:9k.*C@#^/Z{OIN84,!]5_(H:pfT+DuJvoE0XpxMR~' );
define( 'LOGGED_IN_SALT',    'U=o-F.W@l~dY^bbTu;Dsk,C+WBd Ha*;%r+NP%z,O$CK];ar)BE!4DUSAbi2gaZ2' );
define( 'NONCE_SALT',        'C`$Pd4fGF-#/=|q269or3d(S!<Yr=KzueT/!5Nt Y5J7BF~~xp@CG1SV`oxMU;DU' );
define( 'WP_CACHE_KEY_SALT', '<QLyy,E:%[~DF;^ywejXNaaHGl>X Yl2;)<t+=ZaKI&Q5ZaRHU bj{dUm{R,s)QG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
