<?php
    require './assets/smallModalExit.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js" defer></script>
</head>
<body id="indexHeader">
    <header>
    <h1>Olá, 
    <?php session_start();
        if(empty($_SESSION['user'])){
            header("location:../login.php");
        }   
        echo $_SESSION['user'];  
    ?>
     </h1>
        <nav>
            <ul>
                <li><a href="./index.php">Usuários</a></li>
                <li><a href="./registers.php">Cadastro</a></li>
                <li><a id="exit_anchor" href="#">Sair</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>