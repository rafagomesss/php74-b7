<?php $render('header'); ?>

<h2>Adicionar Novo Usuário</h2>

<form method="POST" action="<?=$base;?>/novo">
    <label for="nome">
        Nome:
        <input type="text" name="nome">
    </label>
    <br><br>
    <label for="nome">
        E-mail:
        <input type="email" name="email">
    </label>
    <br><br>
    <button>Adicionar</button>
</form>

<?php $render('footer'); ?>