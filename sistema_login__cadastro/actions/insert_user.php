<?php
require '../config.php';
$username = filter_input(INPUT_POST, 'updateUsername', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'updateEmail', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'updatePassword', FILTER_SANITIZE_SPECIAL_CHARS);

if($username && $email && $password){
    $sql = $pdo->prepare("INSERT INTO tb_usuarios__cadastro (nome, email, senha) VALUES (:nome, :email, :senha)");
    $sql->bindValue(":nome", $username);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $password);
    $sql->execute();

    header("Location:../index.php");
    exit;
} else {
    header("Location:../registers.php");
    exit;
}