<?php
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("MYSQL_DB_NAME"));
/** MySQL database username */
define( 'DB_USER', getenv("MYSQL_ADMIN_USER"));
/** MySQL database password */
define( 'DB_PASSWORD', getenv("MYSQL_ADMIN_PASS"));
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_';
define('AUTH_KEY',         'ip1;QY{-.NZ/+%UaeD<U#:8u+Di,t8Jua`-+oJ{[P_[#vgjv:Nf1G5R#(tlz$dT;');
define('SECURE_AUTH_KEY',  '!}dB/wT0GKbWzy+(2N>]x(mnJm~d9=AeAqr{ ]Ifz,$:+h?tD.VA0IhoumWhywo9');
define('LOGGED_IN_KEY',    '0I_I>{ MKQecw).6a&F |+h76H9u9r(7(E{I< |+Oo]e|OP-W ^NHQMb5DZ+sGco');
define('NONCE_KEY',        'j;3=b%%FBVg5AqfFhl(yxiug;JXBJe|0Ok*|I0+k.*8[Y5N]BD2iJC#E01V;<#!5');
define('AUTH_SALT',        '64dZ{.11D.#4P2jZHEV=OK#^||9&i2%ig3~/+e_e2S7Y@|K%H=UKuOg>b*S+?xep');
define('SECURE_AUTH_SALT', 'lQj_!?vZObJ9ID#Qtr}@%wD0F.&@`}(Z015i$^]HP@/f>3Fv8&94t6%rP~&,/>- ');
define('LOGGED_IN_SALT',   ' C|||sJvGF?++&2STZEgLv;~3m1}D]%!S-r7jX2|{JBb`>-BeO&v0iQxD-]fz?=>');
define('NONCE_SALT',       '1aLQu+=01n$Sr2(s8M+)pYe1,aFeQMLo3k%aOHBw>efr8Is5$8R;x[zZH~!ZWAFw');

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
?>
