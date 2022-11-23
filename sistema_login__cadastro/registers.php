<?php
    require './assets/header.php';
    require './assets/smallModal.php';
?><!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="./assets/style.css">
        <script src="./assets/script.js" defer></script>
    </head>
    <body id="registers" style="background-color: var(--default-color--02); ">
        <section>
        <div class="updateForm">
                <h3>Registrar usuário</h3>
                <form action="./actions/insert_user.php" method="POST">
                    <input type="text" name="updateUserID" value="" hidden>
                    <label>Nome de Usuário
                        <input type="text" name="updateUsername">
                    </label>

                    <label>Email
                        <input type="email" name="updateEmail">
                    </label>

                    <label>Senha
                        <input type="text" name="updatePassword">
                    </label>
                    <button>Registrar</button>
                </form>
            </div>
        </section>
    </body>
</html>