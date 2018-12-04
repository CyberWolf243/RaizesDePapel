<?php 

	require_once "../../classes/conexao.php";
	require_once "../../classes/vendas.php";
	$c= new conectar();
	$conexao=$c->conexao();

	$obj= new vendas();

	$sql="SELECT id_venda,
				dataCompra,
				id_fornecedor 
			from vendas group by id_venda";
	$result=mysqli_query($conexao,$sql); 
	?>

<div class="container">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="table-responsive">
			<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
				<caption><label>Vendas</label></caption>
				<tr>
					<td>Código</td>
					<td>Data</td>
					<td>Fornecedor</td>
					<td>Total da Compra</td>
					
				</tr>
		<?php while($ver=mysqli_fetch_row($result)): ?>
				<tr>
					<td><?php echo $ver[0] ?></td>
					<td><?php echo date("d/m/Y", strtotime($ver[1])) ?></td>
					<td>
						<?php
							if($obj->nomeFornecedor($ver[2])==" "){
								echo "S/F";
							}else{
								echo $obj->nomeFornecedor($ver[2]);
							}
						 ?>
					</td>
					<td>
						<?php 
							echo "R$ ".$obj->obterTotal($ver[0]). ",00";
						 ?>
					</td>
                                        
                                        
				</tr>
		<?php endwhile; ?>
			</table>
		</div>
	</div>
	<div class="col-sm-1"></div>
</div>
</div>