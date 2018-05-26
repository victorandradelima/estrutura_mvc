<?php

class controller{
	public function loadView($viewName, $viewData = array()){

		//A função extract recebe um array, e tranforma em variáveis onde
		//os indices são ós nomes das variáveis e os valores dos indices
		//são os valores das variáveis
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()){
		//Função para chamar um dado template dentro de uma action
		require 'views/template.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}
}