<?php
define( 'DB_NAME', 'aventa' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

define( 'AUTH_KEY',         'aventa_key_1_983471092837498237498237498237498' );
define( 'SECURE_AUTH_KEY',  'aventa_key_2_109238470192837409182374091823740' );
define( 'LOGGED_IN_KEY',    'aventa_key_3_293847019283470192834701928374019' );
define( 'NONCE_KEY',        'aventa_key_4_394857019283470192837401928374019' );
define( 'AUTH_SALT',        'aventa_salt_1_48576019283470192837401928374019' );
define( 'SECURE_AUTH_SALT', 'aventa_salt_2_58670192834701928374019283740192' );
define( 'LOGGED_IN_SALT',   'aventa_salt_3_68701928347019283740192837401928' );
define( 'NONCE_SALT',       'aventa_salt_4_78901928347019283740192837401928' );

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
