<?php
session_start();
include_once("conexao.php");

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$password = md5($password);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if(isset($email)){ 
    if ($email == "murilovbc@gmail.com") {
        header("Location: ../view/admin.php");
    }
    else{
        $sql_verifica = mysqli_query($conn, "SELECT * FROM pessoas WHERE EMAIL = '{$email}' AND PASSWORD = '{$password}' ");
        $nome = mysqli_query($conn, "SELECT NOME FROM pessoas WHERE EMAIL = '{$email}'");
        
        if(mysqli_num_rows($sql_verifica)>0){
            $row = mysqli_fetch_assoc($nome);
            $_SESSION['nomeUsuario'] = $row[NOME];
            header("Location: ../view/post.php");
        }
        else{
            $_SESSION['msg'] = "E-mail ou Senha incorreto";
            header("Location: ../view/cadastro.php"); 
        }
    }
}
?>