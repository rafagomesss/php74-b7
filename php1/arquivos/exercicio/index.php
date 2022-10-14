<?php

$conteudo = file_get_contents('texto.txt');
$lista = [];

if (strlen($conteudo) > 0 ) {
    $lista = explode("\n", substr($conteudo, 0, -1));
}

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
if (!empty($nome)) {
    $conteudo .= "$nome\n";
    file_put_contents('texto.txt', $conteudo);
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Nomes</title>
</head>
<body>
    <form action="" method="POST">
        <label for="nome">Novo Nome:</label><br>
        <input name="nome" type="text">
        <button>Salvar</button>
    </form>
    <br>
    <hr>
    <h2>Lista de Nomes</h2>
    <ul>
        <?php
        foreach($lista as $nome) :
        ?>
        <li><?= $nome; ?></li>
        <?php
        endforeach;
        ?>
    </ul>
</body>
</html>