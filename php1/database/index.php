<h2>Database PDO</h2>

<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$usuarios = $usuarioDao->findAll();

?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php if (count($usuarios) > 0) :?>
        <?php foreach($usuarios as $usuario) :?>
            <tr>
                <td> <?= $usuario->getId(); ?> </td>
                <td> <?= $usuario->getName(); ?> </td>
                <td> <?= $usuario->getEmail(); ?> </td>
                <td align="center">
                    <a href="editar.php?id=<?= $usuario->getId(); ?>">[ Editar ]</a>
                    <a href="excluir.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Deseja realmente excluir?')">[ Excluir ]</a>
                </td>
            </tr>
        <?php endforeach ;?>
    <?php endif ;?>
</table>