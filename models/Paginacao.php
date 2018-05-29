<?php

class Paginacao extends model {

	//Para fazer uma páginação, sempre vamos precisar de 2 funções no qual
	//forão 2 querys: uma para trazer o resultado e outra para contar a
	//a quantidade de resultados
	public function getList($offset, $limit){
		$array = array();
		//Query para trazer os resultados
		$sql = "SELECT * FROM tabelapaginacao LIMIT $offset, $limit";
		$sql = $this->db->query($sql);
		$array = $sql->fetchAll();
		//retorna os resultados e forma de array
		return $array;
	}

	public function getListTotal(){
		//Query para contar a quantidade de resultados
		$sql = "SELECT COUNT(*) as c FROM tabelapaginacao";
		$sql = $this->db->query($sql);
		$sql = $sql->fetch();
		//retorna o valor da contagem
		return $sql['c'];
	}

}