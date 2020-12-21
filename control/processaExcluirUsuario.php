<?php
	session_start();
	include_once("conexao.php");

	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$sqlu = "DELETE FROM PESSOAS WHERE ID = '{$id}'";
		$sqlu_code = mysqli_query($conn,$sqlu);
		$sqlp = "DELETE FROM PUBLICACAO WHERE IDP = '{$id}'";
		$sqlp_code = mysqli_query($conn,$sqlp);

		if ($sqlu_code) {
			$_SESSION['msg'] = "Usuário Excluído com sucesso!!";
		}
		else{
			$_SESSION['msg'] = "Falha ao tentar excluir.";
		}
	}
	header("Location: ../view/admin.php");
?>