
<?php require_once "dependencias.php" ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
</head>
<body>      
    

  <!-- MENU Navbar -->
    
  <div class="container" id="nav" >   <!-- class=container - arruma o tamanho do menu -->
  <div class="navbar navbar-inverse " data-spy="affix" data-offset-top="100">
    
      <div class="container">
        <div class="navbar-header">
            
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> </div>
        <div id="navbar" class="collapse navbar-collapse">

          <ul class="nav navbar-nav navbar-right">
                                
            <!-- class="glyphicon glyphicon-home" - adiciona o icone da casinha  -->
            <li class="active"><a href="inicio.php"><span class="glyphicon glyphicon-home"></span> Inicio</a>
            </li>

            
          </li>
          <li class="dropdown">
           
            <!-- class="glyphicon glyphicon-list-alt" - adiciona o icone da lista  -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list-alt"></span> Gerenciamento Produtos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="categorias.php">Categorias</a></li>
              <li><a href="produtos.php">Produtos</a></li>
            </ul>
          </li>


       
          <li class="dropdown">
            
            <!-- class="glyphicon glyphicon-user" - adiciona o icone de bonequinho de usuario  -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Pessoas <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="fornecedores.php">Fornecedores</a></li>
            </ul>
          </li>




          <!-- class="glyphicon glyphicon-usd" - adiciona o icone de cifrao de dinheiro  -->         
          <li><a href="vendas.php"><span class="glyphicon glyphicon-usd"></span> Vendas</a>
          </li>
          
          <li class="dropdown" >
          
            <!-- class="glyphicon glyphicon-user" - adiciona o icone de bonequinho de usuario  -->             
            <a href="#" style="color: red"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Usuario:   <span class="caret"></span></a>
            <ul class="dropdown-menu">


              <?php if($_SESSION['usuario'] == "admin"): ?>
            
            <!-- class="glyphicon glyphicon-off" - adiciona o icone do botaozinho de desligar[off]  -->  
            <li> <a href="usuarios.php"><span class="glyphicon glyphicon-off"></span> Gestão Usuários</a></li>
          <?php endif; ?>

              <!-- class="glyphicon glyphicon-off" - adiciona o icone do botaozinho de desligar[off]  -->  
              <li> <a style="color: red" href="../procedimentos/sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.contatiner -->
  </div>
</div>
<!-- Main jumbotron for a primary marketing message or call to action -->





<!-- /container -->        


</body>
</html>

<script type="text/javascript">
  $(window).scroll(function() {
    if ($(document).scrollTop() > 150) {
      $('.logo').width(100);
      $('.logo').height(60);

    }
    else {
      $('.logo').height(100);
      $('.logo').width(150);
    }
  }
  );
</script>