<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/categorias.php";



$obj = new categorias();


// U de update 
$dados=array(
	$_POST['idcategoria'],
	$_POST['categoriaU']

);

echo $obj->atualizarCategoria($dados);

 ?>