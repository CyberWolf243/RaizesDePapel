<?php 

// essa classe realiza a conexao do site com o banco de dados

class conectar{
	private $servidor = "localhost";
	private $usuario = "root";
	private $senha = "ifsp";
	private $bd = "sistema";

	public function conexao(){
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

 ?>