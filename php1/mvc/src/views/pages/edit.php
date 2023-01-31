<?php $render('header'); ?>

<h2>Editar Novo Usuário</h2>

<form method="POST" action="<?= $base; ?>/usuario/<?= $usuario['id']; ?>/editar">
    <input type="hidden" name="id" value="<?= $usuario['id']; ?>">
    <label for="nome">
        Nome:
        <input type="text" name="nome" value="<?= $usuario['nome']; ?>">
    </label>
    <br><br>
    <label for="nome">
        E-mail:
        <input type="email" name="email" value="<?= $usuario['email']; ?>">
    </label>
    <br><br>
    <button>Salvar</button>
</form>

<?php $render('footer'); ?>