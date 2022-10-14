<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
    </head>
    <body>
        <h2>Qual é o seu nome?</h2>
        <?php 
            if (!empty($_SESSION['erro'])) {
                echo $_SESSION['erro'];
                unset($_SESSION['erro']);
            }
        ?>
        <form action="processaDados.php" method="POST">
            <input type="text" name="nome" id="nome">
            <button>Salvar</button>
        </form>
    </body>
</html>
