<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Upload Post</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">
  <script src="vendor/jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript">
      $(document).ready(function(){
        $('#enviar').click(function(){
          var dados = $('#cadPubli').serialize();
          $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '../control/processaUpload.php',
                data: dados,
                success: function(response) {
                    //location.reload();
                    alert(response);
                }
          });
          
        });
      });
  </script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <div class="navbar-brand"><a class="nav-link" href="post.php"><font color="white">Criação do Post</font></a></div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="post.php">Início</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="logOut.php">Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?php 
    session_start();
    if (isset($_SESSION['msg'])){
      $mensagem = $_SESSION['msg'];
      echo '<div class="col-md-6 offset-md-3 mt-5"><p>'.$mensagem.'</p></div>';
      unset($_SESSION['msg']);
    }
  ?>
	
	<div class="col-md-6 offset-md-3 mt-5">
        
        <h1>Sobre a publicação</h1>
        <form  action="../control/processaUpload.php" method="POST" enctype="multipart/form-data" id="cadPubli">
          <div class="form-group">
            <label for="exampleInputName" required="required">Título</label>
            <input type="text" name="titulo" class="form-control" id="exampleInputName"  placeholder="Título..." required="required">
          </div>
          
          <div class="form-group">
            <label for="exampleFormControlSelect1" required="required">Gênero</label>
            <select class="form-control" id="exampleFormControlSelect1" name="genero" required="required" placeholder="Gênero...">
              <option></option>
              <option>Ação</option>
              <option>Terror</option>
              <option>Ficção</option>
              <option>Românce</option>
              <option>Aventura</option>
              <option>Suspense</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputName" required="required">Análise</label>
            <textarea name="analise" cols="10" rows="2" class="form-control" id="exampleInputName" placeholder="Análise do filme..." required="required"></textarea>
          </div>

          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Imagem do filme:</label>
            <input type="file" name="arquivo" required="required">
          </div>
          <hr>
          <button type="submit" name="enviar" class="btn btn-primary" id="enviar">Publicar</button>
        </form>
    </div>
    <br>
    <br>

    
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