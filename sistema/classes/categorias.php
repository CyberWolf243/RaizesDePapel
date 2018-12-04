<?php 

class categorias{
	public function adicionarCategoria($dados){ // essa function adiciona novas categorias ao site
		$c = new conectar();
		$conexao=$c->conexao();

		

		$sql = "INSERT into categorias (id_usuario, nome_categoria, dataCaptura) VALUES ('$dados[0]', '$dados[1]', 
		   '$dados[2]')";

		return mysqli_query($conexao, $sql);
	}


	public function atualizarCategoria($dados){ // essa function atualiza as categorias ja existentes no site
		$c = new conectar();
		$conexao=$c->conexao();

		

		$sql = "UPDATE categorias SET nome_categoria = '$dados[1]' where id_categoria = '$dados[0]'";

		echo mysqli_query($conexao, $sql);
	}


	public function excluirCategoria($idcategoria){ // essa function exclui uma determinada categoria do site da qual voce escolher
		$c = new conectar();
		$conexao=$c->conexao();
		

		$sql = "DELETE from categorias where id_categoria = '$idcategoria' ";

		return mysqli_query($conexao, $sql);
	}

}

?>