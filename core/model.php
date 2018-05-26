<?php

class model{

	//Criamos uma variável local para receber os dados de conexão
	//em PDO da variável global
	protected $db;

	//Agora toda vez que a classe model for extendida, nosso arquivo
	//Model terá conexão com o banco de dados
	public function __construct(){
		global $db;
		$this->db = $db;
	}

}