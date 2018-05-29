<?php
//Configurando o PHP para gravar todos os erros que ocorrerem
error_reporting(E_ALL);
//Esta proriedade diz para ir no php.ini deste código e colocar display_errors como On
ini_set("display_errros","On");

session_start();
//Carrega as bibliotecas adicionadas no composer
require 'vendor/autoload.php';
//Configurações de banco de dados
require 'config.php';
//Pré definições de URL (rotas)
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

//Instaciamento e pré configuração da biblioteca monolog
//$log = new Monolog\Logger("erro");
//$log->pushHandler(new Monolog\Handler\StreamHandler('erros.log', Monolog\Logger::WARNING));

//$log->addError("Deu algo errado");

//$core = new Core();
//$core->run();

//echo "URL: " .$_GET['url'];