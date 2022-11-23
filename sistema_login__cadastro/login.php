<?php
    session_start();
    require './assets/smallModal.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Inicial</title>
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/script.js" defer></script>
</head>
<body id="login">
    <main>
        <form action="./actions/auth_user.php" method="POST">
            <div class="titleForm">
                <h2>Login</h2>
            </div>
            <div class="inputsForm">
                <label for="username">Nome de usuário
                    <input type="text" id="username" name="username">
                </label>
                <label for="password">Senha
                    <input type="password" id="password" name="password">
                </label>
            </div>
            <div class="buttonsArea">
                <p><a href="#">Manter-me conectado</a></p>
                <button>Entrar</button>
            </div>
        </form>
    </main>
    <p>Desenvolvido por CodingPlanck</p>
</body>
</html>