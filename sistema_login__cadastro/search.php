<?php
    require './assets/header.php';
    require './assets/smallModal.php';
    require './config.php';

    $info = [];
    $id = filter_input(INPUT_GET, 'updateUserID', FILTER_SANITIZE_NUMBER_INT);

    if($id){
        $sql = $pdo->prepare("SELECT * FROM tb_usuarios__cadastro WHERE ID = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            header("Location:./index.php");
            exit;
        }
    } else {
        header("Location:./index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="./assets/style.css">
        <script src="./assets/script.js" defer></script>
    </head>
    <body id="search" style="background-color: var(--default-color--02); ">
        <section>
            <div class="updateForm">
                <h3>Alterar informações</h3>
                <form action="./actions/update_user.php" method="POST">
                    <input type="text" name="updateUserID" value="<?= $info['ID']; ?>" hidden>
                    <label>Nome de Usuário
                        <input type="text" name="editUsername" value="<?= $info['nome']; ?>">
                    </label>

                    <label>Email
                        <input type="email" name="editEmail" value="<?= $info['email']; ?>">
                    </label>

                    <label>Senha
                        <input type="text" name="editPassword" value="<?= $info['senha']; ?>">
                    </label>
                    <button>Salvar</button>
                </form>
            </div>
        </section>
    </body>
</html>