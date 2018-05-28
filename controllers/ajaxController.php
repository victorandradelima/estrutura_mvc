<?php

class ajaxController extends controller{

	public function __contruct(){
		parent::__contruct();
	}

	public function index(){
		$dados = array(
			'imprimeExemploAjax' => ''
		);

		if (isset($_POST['exemploAjaxVal']) && !empty($_POST['exemploAjaxVal'])) {
			$ajaxVal = addslashes($_POST['exemploAjaxVal']);
			$dados['imprimeExemploAjax'] = 'Eu imprimi essa variável: '.$ajaxVal;
		}

		$this->loadView('exemploAjax',$dados);
	}

}