<?php
session_start();
require 'template/header.php';

if (!empty($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    unset($_SESSION['aviso']);
}
?>
<a href="apagar.php">Apagar Cookie</a>
<form action="recebedor.php" method="POST">
    <label>
        Nome:
        <br>
        <input name="nome" type="text">
    </label>
    <br>
    <br>

    <label>
        E-mail:
        <br>
        <input name="email" type="text">
    </label>
    <br>
    <br>

    <label>
        Idade:
        <br>
        <input name="idade" type="text">
    </label>
    <br>
    <br>

    <button>Enviar</button>
</form>