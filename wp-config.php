<?php

define( 'DB_NAME', 'wordpress-project-1' );
define( 'DB_USER', 'new_user' );
define( 'DB_PASSWORD', 'password' );
// define( 'DB_HOST', 'localhost' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
// define( 'DB_COLLATE', 'utf8_general_ci' );

define('AUTH_KEY',         ':D+y&);hm%&fOkU|-^dP4HgMR:z3HdQML*%}(U8l^[1U}+Jqa;</oPf(k%`]sE|+');
define('SECURE_AUTH_KEY',  'g6e,d!xpIYgY3n21l*~66Y:aE%F/T&*GY!d&v^JcU_&{Y]#o2_ :?{C:rjIK>%S ');
define('LOGGED_IN_KEY',    'TBekK4!N%IAH`qCRdRAj2Zz,4X_GZ?vb|5px{6]*k!The>c$G/um(Y56P%O1^?|&');
define('NONCE_KEY',        '-2=^Am3|&owr]7(-V :=.<dkBGH56Kf7LJc8f,N8}RfcrUVz4@x{mgO<UkkByz,*');
define('AUTH_SALT',        'i<qy2!ZQ&4U )?[qb{}YM^v6oTX?0+>6%)u/!539>~a+CRDQ<6qQ;hZ`pf=i6gWL');
define('SECURE_AUTH_SALT', '|+]MmpS]@B!%{VAz_R+v=t4<~(eU5a4WxPpXyJVK]L1(l|,5AUo;Q:|ksnqBr4tm');
define('LOGGED_IN_SALT',   'c]T[,R$f$|A6{GTwBVYS#v|w0rveHFl6{MqRnC)Hshoe$w-?G^h9 VeC|[+HoWw-');
define('NONCE_SALT',       ',`h-69??|8HH$b~]@cPeL };*M]>!Khm]<-,G_dYxCDBa*f^{kc>s|s,l-RR{p6A');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );

define('WP_ALLOW_REPAIR', true);
