<?php
/** The name of the database for WordPress */
define( 'DB_NAME', getenv_docker('MYSQL_DB_NAME',''));
/** MySQL database username */
define( 'DB_USER', getenv_docker('MYSQL_ADMIN_USER', '') );
/** MySQL database password */
define( 'DB_PASSWORD', getenv_docker('MYSQL_ADMIN_PASS', '') );
/** MySQL hostname */
define( 'DB_HOST', getenv_docker('MYSQL_ADMIN_HOST', ''));
require_once ABSPATH . 'wp-settings.php';
