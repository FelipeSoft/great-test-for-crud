<?php
session_start();
require '../config.php';

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, 'password');

$sql = $pdo->prepare("SELECT * FROM tb_usuarios__cadastro WHERE nome = :nome AND senha = :senha");
$sql->bindValue(":nome", $username);
$sql->bindValue(":senha", $password);
$sql->execute();

if($sql->rowCount() > 0){
    header("Location:../index.php");
    $_SESSION['user'] = $username;
} else {
    if($username === '' || $password === ''){
        header("Location:../login.php");
        $_SESSION['warning'] = 'Preencha os campos corretamente!';
    } else {
        header("Location:../login.php");
        $_SESSION['warning'] = 'O usuário informado não está cadastrado!';
    }
}