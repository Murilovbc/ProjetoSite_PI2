<?php
session_start();

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if(isset($email)){ 
    header("Location: cadastro.php");
}
?>