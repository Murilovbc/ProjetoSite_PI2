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
         <a class="nav-link" href="post.php"><font color="white">Publicações</font></a>     
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
            <a class="nav-link" href="perfil.php">Perfil
            </a>
          </li>
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
          if (isset($_GET["genero"]) && $_GET["genero"] != NULL) {
            $gen = $_GET["genero"];
            $inner = "SELECT * FROM PESSOAS JOIN PUBLICACAO ON PESSOAS.ID = PUBLICACAO.IDP WHERE PUBLICACAO.GENERO = '{$gen}' ORDER BY PUBLICACAO.ID DESC";

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
          }
          else{
            $inner = "SELECT * FROM PESSOAS JOIN PUBLICACAO ON PESSOAS.ID = PUBLICACAO.IDP ORDER BY PUBLICACAO.ID DESC";

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
          }
       ?>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <form action="pesquisar.php">
          	<h5 class="card-header">Pesquisar</h5>
         	 <div class="card-body">
            	<div class="input-group">
              		<input type="text" name="pesquisar" class="form-control" placeholder="Pesquisar Por...">
             	 	<span class="input-group-btn">
                		<button class="btn btn-primary" type="submit" name="enviar">Vai!</button>
              		</span>
            	</div>
          	</div>
          </form>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Filtrar Gêneros</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href=post.php?genero=Ação>Ação</a>
                  </li>
                  <li>
                    <a href=post.php?genero=Terror>Terror</a>
                  </li>
                  <li>
                    <a href=post.php?genero=Ficção>Ficção</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href=post.php?genero=Românce>Românce</a>
                  </li>
                  <li>
                    <a href=post.php?genero=Aventura>Aventura</a>
                  </li>
                  <li>
                    <a href=post.php?genero=Suspense>Suspense</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
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