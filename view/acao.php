

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Analise Filmes</title>

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
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->


  <div class="container">


    <div class="row">
    
      <!-- Post Content Column -->
      <div class="col-lg-8">
      	
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
          <h5 class="card-header">Generos</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <!--<a href="#">Ação</a>-->
                  </li>
                  <li>
                    <a href="terror.php">Terror</a>
                  </li>
                  <li>
                    <a href="ficcao.php">Ficção</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="romance.php">Românce</a>
                  </li>
                  <li>
                    <a href="aventura.php">Aventura</a>
                  </li>
                  <li>
                    <a href="suspense.php">Suspense</a>
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