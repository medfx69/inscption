
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
define('DB_NAME', 'wordpress');
define('DB_USER', 'mait-aad');
define('DB_PASSWORD', 'Mmedddaaa');
define('DB_HOST', 'mariadb');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
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
define('AUTH_KEY',         'ip1;QY{-.NZ/+%UaeD<U#:8u+Di,t8Jua`-+oJ{[P_[#vgjv:Nf1G5R#(tlz$dT;');
define('SECURE_AUTH_KEY',  '!}dB/wT0GKbWzy+(2N>]x(mnJm~d9=AeAqr{ ]Ifz,$:+h?tD.VA0IhoumWhywo9');
define('LOGGED_IN_KEY',    '0I_I>{ MKQecw).6a&F |+h76H9u9r(7(E{I< |+Oo]e|OP-W ^NHQMb5DZ+sGco');
define('NONCE_KEY',        'j;3=b%%FBVg5AqfFhl(yxiug;JXBJe|0Ok*|I0+k.*8[Y5N]BD2iJC#E01V;<#!5');
define('AUTH_SALT',        '64dZ{.11D.#4P2jZHEV=OK#^||9&i2%ig3~/+e_e2S7Y@|K%H=UKuOg>b*S+?xep');
define('SECURE_AUTH_SALT', 'lQj_!?vZObJ9ID#Qtr}@%wD0F.&@`}(Z015i$^]HP@/f>3Fv8&94t6%rP~&,/>- ');
define('LOGGED_IN_SALT',   ' C|||sJvGF?++&2STZEgLv;~3m1}D]%!S-r7jX2|{JBb`>-BeO&v0iQxD-]fz?=>');
define('NONCE_SALT',       '1aLQu+=01n$Sr2(s8M+)pYe1,aFeQMLo3k%aOHBw>efr8Is5$8R;x[zZH~!ZWAFw');
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
