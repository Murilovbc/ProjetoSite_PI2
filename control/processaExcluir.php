<?php
	session_start();
	include_once("conexao.php");

	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$sql = "DELETE FROM PUBLICACAO WHERE ID = '{$id}'";
		$sql_code = mysqli_query($conn,$sql);
		if ($sql_code) {
			$_SESSION['msg'] = "Publicação Excluída com sucesso!!";
		}
		else{
			$_SESSION['msg'] = "Falha ao tentar excluir.";
		}
	}
	header("Location: ../view/perfil.php");	
?>