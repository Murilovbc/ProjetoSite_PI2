<?php
  session_start();
  include_once("../control/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Eu Indico - Filmes & Séries</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <div class="navbar-brand">
         <a class="nav-link" href="admin.php"><font color="white">Logado como administrador</font></a>     
     </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="logOut.php">Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->


  <div class="container">


    <div class="row">
    
      <!-- Post Content Column -->
      <div class="col-lg-8">
      	<?php
        	if (isset($_SESSION['msg'])) {
        		echo "</br>".$_SESSION['msg'];
        		unset($_SESSION['msg']);
        	}
            $inner = "SELECT * FROM PESSOAS WHERE ID > 1 ORDER BY ID";

            $resultado_p = mysqli_query($conn, $inner);
            while ($linhas_p = mysqli_fetch_assoc($resultado_p)) {
              echo '<h1 class="mt-4">ID:'.$linhas_p["ID"].'</h1>';
              echo '<p class="lead">Usuário: '.$linhas_p["NOME"].'</p>';
              echo '<p>Sexo: '.$linhas_p["SEXO"].'</p>';
              echo '<p class="lead"><a href=../control/processaExcluirUsuario.php?id='.$linhas_p["ID"].'>Excluir</a></p><hr><hr>';
            }
          
       ?>
      </div>



    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Desenvolvimento &UFU; Eu Indico - Filmes & Séries</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>