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

  <title>Perfil</title>

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
        <a class="nav-link" href="perfil.php"><font color="white">Suas Publicações, <?php echo $_SESSION['nomeUsuario']; ?>  </font></a>
     </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
          	<a class="nav-link" href="upload.php">Publicar</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="post.php">Inicio</a>
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
          $nome = $_SESSION['nomeUsuario'];
          $inner = "SELECT * FROM PESSOAS JOIN PUBLICACAO ON PESSOAS.ID = PUBLICACAO.IDP WHERE PESSOAS.NOME = '{$nome}' ORDER BY PUBLICACAO.ID DESC";

          $resultado_p = mysqli_query($conn, $inner);
          while ($linhas_p = mysqli_fetch_assoc($resultado_p)) {
            echo '<h1 class="mt-4">'.$linhas_p["TITULO"].'</h1>';
            echo '<p class="lead">by '.$linhas_p["NOME"].'</p><hr>';
            echo '<p>Publicado em '.$linhas_p["DATA"].'</p><hr>';
            echo '<p>Gênero: '.$linhas_p["GENERO"].'</p><hr>';
            echo '<img class="img-fluid rounded" src="../control/img/'.$linhas_p["IMAGEM"].'" width="600" height="200"/><hr>';
            echo '<p>Análise do filme: </p>';
            echo '<p>'.wordwrap($linhas_p["DESCRICAO"],75,'<br />',1).'</p><hr><hr>';
          }
        ?>
      </div>

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