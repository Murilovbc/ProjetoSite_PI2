<?php
	session_start();
	include_once("conexao.php");

	$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
	$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
	$analise = filter_input(INPUT_POST, 'analise', FILTER_SANITIZE_STRING);

	$str_analise = nl2br($analise);
	$usuario = $_SESSION['nomeUsuario'];

	if (isset($_FILES['arquivo'])) {
		$extensao =strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()).$extensao;

		$diretorio = "img/";

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

		$select = "SELECT ID FROM PESSOAS WHERE NOME = '{$usuario}'";
		$selectID = mysqli_query($conn,$select);
		$linha = mysqli_fetch_assoc($selectID);
		$id = $linha["ID"];
		
		$sql = "INSERT INTO PUBLICACAO (IDP,TITULO,GENERO,DESCRICAO,IMAGEM,DATA) VALUES('$id','$titulo','$genero','$str_analise','$novo_nome',NOW())";
		$sql_code = mysqli_query($conn,$sql);
		if ($sql_code) {
			$_SESSION['msg'] = "Publicação Realizada com sucesso!!";
			$response = array("success" => true);
			echo json_encode($response);
		}
		else{
			$_SESSION['msg'] = "Falha ao publicar";
		}

		header("Location: ../view/upload.php");
	}
		
?>