<?php
class exemploController extends controller{

	//Exemplo de action na raiz do controller, nesses casos sempre
	//usaremos o nome index, é como se fosse o index.php na pasta
	//do nome do controller
	public function index(){
		$exemploModel = new Exemplo();
		$dados = array(
			'exemploModelMetodo' => $exemploModel->getExemplo(),
			'exemploModelVar' => $exemploModel->varExemplo1
		);
		$this->loadTemplate('exemplo',$dados);
	}

	//Exemplo para actions fora da raiz do controller
	public function exemploAction(){
		$exemploModel = new Exemplo();
		$dados = array(
			'exemploModelMetodo' => $exemploModel->getExemplo(),
			'exemploModelVar' => $exemploModel->varExemplo1
		);
		$this->loadTemplate('exemploAction',$dados);
	}

}