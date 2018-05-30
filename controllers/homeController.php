<?php
//esse extendes controller é como um "ajudador", onde seus métodos e parâmentros 
//ficam configurados em core/controller.php
class homeController extends controller{
	//A função (action) index é padrão, sem ela o controller não funciona caso não haja action

	//Isso é uma action
	public function index(){
		
		//Criando uma varável que recebe tudo que tem no model
		$exemplo = new Exemplo();

		//vetor de variáveis que vai para o core/controller e é quebrado em variáveis
		//propriamente ditas
		$dados = array(
			'retornoValor' => $exemplo->getExemplo(),
			'retornoValorDoBanco' => $exemplo->getExemploBancoDeDados(),
			'retornoVariavel' => $exemplo->varExemplo1
		);

		//Esse função carrega uma template com uma view específica
		//$this->loadTemplateAndView('nometemplate','nomeview','dados');
		$this->loadTemplateAndView('home', 'home', $dados);



	}

}