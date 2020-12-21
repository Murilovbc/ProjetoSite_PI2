


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar</title>


	<link rel="stylesheet" href="css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/cadastro.css">


</head>
<body>
	

	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Log In</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="../control/processaLogin.php">
					<div class="row align-items-center remember">
						<?php
							session_start();
							if (isset($_SESSION['msg'])) {
								echo $_SESSION['msg'];
								unset($_SESSION['msg']);
							}
						?>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="E-mail" name="email">						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" name="password">
					</div>
					
					<div class="form-group">
						<input type="submit" name="" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Não tem uma conta?<a href="cadastrar.php">Cadastrar</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>