<?php
session_start();
include_once("conexao.php");

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$password = md5($password);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);

if(isset($email)){ 
    $sql_verifica_email = mysqli_query($conn, "SELECT * FROM pessoas WHERE EMAIL = '{$email}' ");
    $sql_verifica_nome = mysqli_query($conn, "SELECT * FROM pessoas WHERE NOME = '{$nome}' ");

    #Se o retorno for maior do que zero, diz que já existe um.
    if(mysqli_num_rows($sql_verifica_email)>0){ 
        $_SESSION['msg'] = "Já existe um usuário cadastrado com este email";
        header("Location: ../view/cadastrar.php");
    }
    else if(mysqli_num_rows($sql_verifica_nome)>0){ 
        $_SESSION['msg'] = "Nome de usuário já existe, insira outro";
        header("Location: ../view/cadastrar.php");
    }
    else{
        $inserir_usuario = "INSERT INTO PESSOAS (NOME,EMAIL,SEXO,PASSWORD) VALUES ('$nome', '$email', '$sexo', '$password')";
        $cadastrado = mysqli_query($conn, $inserir_usuario);
        if ($cadastrado) {
            header("Location: ../view/cadastro.php");
        }
        else{
            $_SESSION['msg'] = "Falha no cadastro, tente novamente!";
            header("Location: ../view/cadastrar.php");
        }
    } 
}
?>