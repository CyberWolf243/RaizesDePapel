<?php 


require_once "../../classes/conexao.php";
require_once "../../classes/fornecedores.php";



$obj = new fornecedores();


// U de update 
$dados=array(
	$_POST['idfornecedorU'],
	$_POST['nomeU'],
	$_POST['sobrenomeU'],
	$_POST['enderecoU'],
	$_POST['emailU'],
	$_POST['telefoneU'],
	$_POST['cnpjU']
	

);

echo $obj->atualizar($dados);

 ?>