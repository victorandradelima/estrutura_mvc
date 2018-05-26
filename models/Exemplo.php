<?php
//Ao extendes a classe model, estamos realizando a conexão com o banco de dados
// que acontece dentro dessa classe.
class Exemplo extends model{
	
	public function getExemplo(){
		$n = 'Valor exemplo de retorno de método';
		return $n;
	}

	public function getExemploBancoDeDados(){
		//Criamos um variável para guardar nossa query
		$sql = "SELECT COUNT(*) as c FROM anuncios";

		//Processamos a nossa query com a variável $DB que veio no model
		$sql = $this->db->query($sql);

		//Verificamos se retornou algum resultado
		if ($sql->rowCount() > 0) {
			//Se tiver alguma coisa retorna
			$sql = $sql->fetch();
			return $sql['c'];
		}else{
			//set não tiver nada, retorna 0;
			return 0;
		}
	}
	
	public $varExemplo1 = 'Valor de variável de exemplo';

}