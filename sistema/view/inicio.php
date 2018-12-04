

<?php 
	session_start();
	if(isset($_SESSION['usuario'])){


 ?>

<!DOCTYPE html>
<html>


 


<head>
	<title>Início</title>
</head>
<body>
 	<div class="container">
           
                    <div class="col-sm-4"></div>
                    <div class="col-sm-5">
    <IMG src="../img/arvore1.png">

                </div>
        </div>
        	<?php require_once "menu.php" ?>
            <!-- fim cor do fundo -->


                    

<div id="vendasFeitas"></div>

            
                         
    </body>

</html>


<?php 
} else{
	header("location:../index.php");
}

 ?>


<script type="text/javascript">
		$(document).ready(function(){

				
				$('#vendasFeitas').load('vendas/vendasRelatorios.php');
				
				$('#vendasFeitas').show();
				
		});

		

	</script>


