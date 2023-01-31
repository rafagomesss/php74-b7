<?php $render('header'); ?>

<a href="<?= $base; ?>/novo">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach ($usuarios as $usuario) : ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td align="center">
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar" title="Editar">
                    <i class="fa-solid fa-user-pen"></i>
                </a>
                <a href="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/excluir" onclick="return confirm('Deseja realmente excluir esse registro?');" title="Excluir">
                    <i class="fa-solid fa-trash"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php $render('footer'); ?>