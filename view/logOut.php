<?php
	session_start();
	session_destroy();
	
	header("Location: ../view/cadastro.php");
?>