<?php
//Esse controller possui como funcção retornar a página 404 quando não for encontrado
//Um controler ou action ou paramentro do link que o usuário tentou acessar
class notFoundController extends controller{
	public function index(){
		$this->loadView('404',array());
	}
}