<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projetosite_pi2";

$conn = mysqli_connect($servidor, $usuario, $senha);
$banco = mysqli_select_db($conn, $dbname);
mysqli_set_charset($conn, 'utf8');

?>