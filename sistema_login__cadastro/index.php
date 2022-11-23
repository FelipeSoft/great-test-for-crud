<?php
    require './config.php';
    require './assets/header.php';
    require './assets/smallModal.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM tb_usuarios__cadastro");
    $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <link rel="stylesheet" href="./assets/style.css">
        <script src="./assets/script.js" defer></script>
        <script src="https://use.fontawesome.com/a443ad607e.js"></script>
    </head>
    <body id="homeIndex" style="background-color: var(--default-color--02); ">
    </div>
        <section>
            <h3 id="list" style="margin:100px 0px 15px;">Usuários listados</h3>
            <table>
                <tr id="headerTableUsers">
                    <th>ID</th>
                    <th>Nome de Usuário</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Ações</th>
                </tr>
                <?php foreach($lista as $user): ?>
                    <tr class="infoTableUsers">
                        <td><?= $user['ID']; ?></td>
                        <td><?= $user['nome']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['senha']; ?></td>
                        <td>
                            <a href="./search.php?updateUserID=<?= $user['ID']; ?>"><i class="fa fa-pencil-square-o"></i>Editar</a>
                            <a href="./actions/delete_user.php?updateUserID=<?= $user['ID']; ?>" onclick="return confirm('Deseja realmenete excluir o registro?')"><i class="fa fa-trash-o"></i>Excluir</a>
                        </td>
                    </tr>
                <?php endforeach?>
            </table>
        </section>
    </body>
</html>
