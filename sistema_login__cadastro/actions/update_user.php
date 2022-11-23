<?php
require '../config.php';

$id = filter_input(INPUT_POST, 'updateUserID', FILTER_SANITIZE_NUMBER_INT);
$username = filter_input(INPUT_POST, 'editUsername', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'editEmail', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'editPassword', FILTER_SANITIZE_SPECIAL_CHARS);

if($username && $email && $password){
    $sql = $pdo->prepare("UPDATE tb_usuarios__cadastro SET nome = :nome, email = :email, senha = :senha WHERE ID = :id");
    $sql->bindValue(":nome", $username);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":senha", $password);
    $sql->bindValue(":id", $id);
    $sql->execute();

    header("Location:../index.php");
    exit;
} else {
    header("Location:../index.php");
    exit;
}