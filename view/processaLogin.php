<?php
session_start();

$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

if(isset($email)){ 

    header("Location: post.php");  
}
?>