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

	public function loadTemplateAndView($viewTemplate, $viewName, $viewData = array()){
		//Função que carrega um template selecionado e depois carrega uma view tambem
		//selecionada, a view é carregada com a função loadViewInTemplate
		require 'templates/'.$viewTemplate.'.php';
	}

	public function loadViewInTemplate($viewName, $viewData = array()){
		extract($viewData);
		require 'views/'.$viewName.'.php';
	}

	
}