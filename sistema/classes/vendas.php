<?php 

class vendas{
	public function obterDadosProduto($idproduto){ // essa function captura os dados de um determinado produto ja cadastrado
		$c= new conectar();
		$conexao=$c->conexao();

		$sql="SELECT pro.nome,
		pro.descricao,
		pro.quantidade,
		img.url,
		pro.preco
		from produtos as pro 
		inner join imagens as img
		on pro.id_imagem=img.id_imagem 
		and pro.id_produto='$idproduto'";
		$result=mysqli_query($conexao,$sql);

		$ver=mysqli_fetch_row($result);



		$d=explode('/', $ver[3]);

		$img=$d[1].'/'.$d[2].'/'.$d[3];

		$dados=array(
			'nome' => $ver[0],
			'descricao' => $ver[1],
			'quantidade' => $ver[2],
			'url' => $img,
			'preco' => $ver[4]
		);		
		return $dados;
	}

	public function criarVenda(){ // essa function realiza a criaçao da venda 
		$c= new conectar();
		$conexao=$c->conexao();

		$data=date('Y-m-d');
		$idvenda=self::criarComprovante();
		$dados=$_SESSION['tabelaComprasTemp'];
		$idusuario=$_SESSION['iduser'];
		$r=0;

		for ($i=0; $i < count($dados) ; $i++) { 
			$d=explode("||", $dados[$i]);

			$sql="INSERT into vendas (id_venda,
										id_fornecedor,
										id_produto,
										id_usuario,
										preco,
										quantidade,
										total_venda,
										dataCompra)
							values ('$idvenda',
									'$d[8]',
									'$d[0]',
									'$idusuario',
									'$d[3]',
									'$d[6]',
									'$d[7]',
									'$data')";




			
			$r=$r + $result=mysqli_query($conexao,$sql);



		}

		return $r;
	}

	public function criarComprovante(){ // essa function cria o comprovante de um determinada venda
		$c= new conectar();
		$conexao=$c->conexao();

		$sql="SELECT id_venda from vendas group by id_venda desc";

		$resul=mysqli_query($conexao,$sql);
		$id=mysqli_fetch_row($resul)[0];

		if($id=="" or $id==null or $id==0){
			return 1;
		}else{
			return $id + 1;
		}
	}
        
 // --------------------------------------------------------------------------------------------------------------------
        //alterar ao invez de encontrar Fornecedor encontra funcionario
	public function nomeFornecedor($id_fornecedor){
		$c= new conectar();
		$conexao=$c->conexao();


		 $sql="SELECT sobrenome,nome 
			from fornecedores 
                        where id_fornecedor='$id_fornecedor'";
		$result=mysqli_query($conexao,$sql);

		$ver=mysqli_fetch_row($result);

		return $ver[1]." ".$ver[0];
	}

	public function obterTotal($idvenda){ // essa function obtem o valor total de uma determinada venda
		$c= new conectar();
		$conexao=$c->conexao();


		$sql="SELECT total_venda 
				from vendas 
				where id_venda='$idvenda'";
		$result=mysqli_query($conexao,$sql);

		$total=0;

		while($ver=mysqli_fetch_row($result)){
			$total=$total + $ver[0];
		}

		return $total;
	}
}

?>