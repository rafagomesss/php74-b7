<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!empty($id)) {
    $usuarioDao = new UsuarioDaoMysql($pdo);

    $usuario = $usuarioDao->findById($id);
}

if (empty($id) || $usuario === false) {
    header('Location: index.php');
    exit();
}
?>

<h1>Editar Usuário</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">
    <label>
        Nome: <br>
        <input type="text" name="name" value="<?= $usuario->getName() ?? null; ?>">
    </label> <br><br>

    <label>
        E-mail: <br>
        <input type="email" name="email" value="<?= $usuario->getEmail() ?? null;?>">
    </label> <br><br>

    <input type="submit" value="Salvar">
</form>