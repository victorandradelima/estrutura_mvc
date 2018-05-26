<?php
class Core{
	public function run(){
		$url ='/';
		if (isset($_GET['url'])) {
			$url .= $_GET['url'];
		}

		//Essa variável receberá os paramentros que virão logo depois do controller e da action
		//Se não colocar ela, vai dar pau, caso não tenha paramentros
		$params = array();

		//Esse if verifica se tem url e se é a página inicial, se for, ele vai para o else
		//o else entende que como é a raiz do site, vai receber o padrão index na action
		if (!empty($url) && $url != '/') {
			$url = explode('/', $url);

			//No explode acima a primeira posição da url fica vazia, essa função apenas
			//tira a primeira posição do valor do array
			array_shift($url);

			//Como tiramos a primeiro valor, a posição 0 passa a ser sempre o nosso controller.
			//Assim nós concatemos com a palavra Controller, pois será o padrão que vamos 
			//escrever todos os controllers
			$currentController = $url[0].'Controller';

			//A gente tira para sobrar da action pra frente
			array_shift($url);			

			//Aqui estamos verificando caso o link só tenha o controller ou está na raiz
			//Ou seja, se estiver na raiz, a action passa a ser a posição do controller
			//Se tiver um controller a action passa a ser index, que é a primeira action
			if (isset($url[0]) && !empty($url[0])) {
				$currentAction = $url[0];
				//Agora a gente remove para tirar o controller e action para sobrar só os paramentros
				array_shift($url);
			}else{
				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$params = $url;
			}

		}else{
			//Padrão enviado quando estiver na raiz do site
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		//Estamos verificando se o controller digitado pelo usuário existe,
		//Se não existir vamos definir que o controller será o controller
		//definido para exibir a página de 404
		//A segunda parte do if temos o caso de um controller correto mas, 
		//uma action que não existe, que também será enviada para a página 404
		if (!file_exists('controllers/'.$currentController.'.php') || !method_exists($currentController, $currentAction)) {
			$currentController = 'notFoundController';
			$currentAction = 'index';
		}

		//Estaciando o controller baseado na variável current
		$c = new $currentController();

		//Como executar uma função dentro de uma classe que não sabemos o nome
		//essa função do php recebe dois paramentros, o primeiro é um vetor com
		//o controller na variavel $c e com a action dele, o segundo paramentro
		//é os parâmentro da action
		call_user_func_array(array($c, $currentAction), $params);

		//Para testes
		//echo "<hr>";
		//echo "CONTROLLER: ".$currentController."<br>";
		//echo "ACTION: ".$currentAction."<br>";
		//echo "PARAMS: ".print_r($params,true)."<br>";
	}
}
