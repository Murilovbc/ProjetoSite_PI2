<?php
	session_start();
	
	$msg = false;
	$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
	$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_STRING);
	$analise = filter_input(INPUT_POST, 'analise', FILTER_SANITIZE_STRING);

	$str_analise = nl2br($analise);
	$usuario = $_SESSION['nomeUsuario'];
	if (isset($_FILES['arquivo'],$titulo,$genero,$analise)) {
		$extensao =strtolower(substr($_FILES['arquivo']['name'], -4));
		$novo_nome = md5(time()).$extensao;

		$diretorio = "img/";

		move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
		$msg = "Publicação Realizada com sucesso!!";
	}
		
?>