<?php

class ajaxController extends controller{

	public function index(){

		//Uma variável criada para pegar as funções do Model Exemplo
		$exemploAjax = new Exemplo();

		//A primeira linha é só para inicializar a variável a segunda puxa o valor
		//da função do model Exemplo que utiliza banco de dados
		$dados = array(
			'imprimeExemploAjax' => '',
			'imprimeExemploAjaxBanco' => $exemploAjax->getAjaxExemploBancoDeDados()
		);

		//O if serve para verificar se foi digitado alguma coisa, se foi, muda o valor
		//da variável para uma valor que contem o que foi digitado na requisição do ajax
		if (isset($_POST['exemploAjaxVal']) && !empty($_POST['exemploAjaxVal'])) {
			$ajaxVal = addslashes($_POST['exemploAjaxVal']);
			$dados['imprimeExemploAjax'] = 'Eu imprimi essa variável: '.$ajaxVal.'<br>';
		}

		//Uma view específica para o ajax imprimir seu resultado, mesmo que este resultado
		//seja em outra view. Podemos imprimir direto no controller e não usar uma view,
		//se for pouca coisa
		$this->loadView('exemploAjax',$dados);

		//No caso do json não precisamos colocar essa view, mas sim da um echo no
		//seguinte código abaixo
		//echo json_encode($dados);
		//Basicamento ele está imprimindo nosso vetor de resultado em json
		//Lembrando que também é necessário uma alteração na função js que chama este jason
	}

}