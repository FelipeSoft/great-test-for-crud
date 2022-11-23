<?php
require '../config.php';
$id = filter_input(INPUT_GET, 'updateUserID');

if($id){
    $sql = $pdo->prepare("DELETE FROM tb_usuarios__cadastro WHERE ID = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
}

header("Location:../index.php");
exit;