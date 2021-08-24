<?php
	session_start();
	$autoload = function($class){

		if ($class == 'Email') {
			include('classes/phpmailer/PHPMailerAutoload.php');
		}

		include('classes/'.$class.'.php');

	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/painel/');
	//define('INCLUDE_PATH', INCLUDE_PATH.'painel/');



	//conectar ao banco de dados
	define('HOST','localhost');
	define('USER', 'root');
	define('PASSWORD','');
	define('DATABASE','painel');

?>