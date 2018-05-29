<?php
class paginacaoController extends controller{

	public function index(){
		//Variável que irá receber os dados do DB no banco de dados
		$paginacao = new Paginacao();

		//Offset irá demarcar qual o resultado inicial da query no BD
		$offset = 0;
		
		//Será a quantidade por página que será definida
		$limit = 10;

		//Função que irá retornar a quantidade de resultados
		$total = $paginacao->getListTotal();

		//Variável que vai receber os dados que vem do BD
		$dados = array();

		// A função ceil sempre arredonda uma divisão para cima
		$dados['paginas'] = ceil($total/$limit);

		//Por padrão, a página atual sempre será a primeira página
		$dados['paginaAtual'] = 1;

		//Se no link tiver um 'p' vamos mudar a página atual para o valor de 'p'
		if (!empty($_GET['p'])) {
			$dados['paginaAtual'] = intval($_GET['p']);
		}

		//Método para definir o primeiro resultado se baseando em 'p'
		$offset = ($dados['paginaAtual'] * $limit) - $limit;

		//Função que retorna os valore sda query pesquisadam
		//montando o LIMIT de $offset até $limit
		$dados['lista'] = $paginacao->getList($offset, $limit);

		//Envia tudo para a view paginação
		$this->loadTemplate('paginacao',$dados);

	}

}