<?php
session_start();

if (empty($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}
?>

<h2>Olá, <?=$_SESSION['nome'];?> - <a href="apagar.php">Sair</a></h2> 