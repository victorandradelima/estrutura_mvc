<?php
//Configurando o PHP para gravar todos os erros que ocorrerem
error_reporting(E_ALL);
//Esta proriedade diz para ir no php.ini deste código e colocar display_errors como On
ini_set("display_errros","On");

session_start();
require 'config.php';
require 'routers.php';

spl_autoload_register(function($class){
	if(file_exists('controllers/'.$class.'.php')){
		require 'controllers/'.$class.'.php';
	}else if(file_exists('models/'.$class.'.php')){
		require 'models/'.$class.'.php';
	}else if(file_exists('core/'.$class.'.php')){
		require 'core/'.$class.'.php';
	}
});

$core = new Core();
$core->run();

//echo "URL: " .$_GET['url'];