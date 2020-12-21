
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>

	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/cadastrar.css">

	<script src="vendor/jquery/jquery-3.5.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" language="javascript">
	      $(document).ready(function(){
	        $('#cadastrar').click(function(){
	          var dados = $('#cadUsuario').serialize();
	          $.ajax({
	                type: 'POST',
	                dataType: 'json',
	                url: '../control/processaCadastro.php',
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

	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Cadastrar</h3>
			</div>
			<div class="card-body">
				<form action="../control/processaCadastro.php" method="POST" id="cadUsuario">
					<div class="row align-items-center remember">
						<?php
							session_start();
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
					</div>

					<!--Nome-->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário" name="nome" required="required">
					</div>
					<!--Email-->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="E-mail" name="email" required="required">	
					</div>
					<!--Senha-->
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Senha" name="password" required="required">
					</div>
					<!--Sexo-->
					<div class="row align-items-center remember">
						<input type="radio" value="masculino" name="sexo">Masculino
						<input type="radio" value="feminino" name="sexo">Feminino
					</div>
					<div class="form-group">
						<input type="submit" name="cadastrar" value="cadastrar" class="btn float-right login_btn">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>