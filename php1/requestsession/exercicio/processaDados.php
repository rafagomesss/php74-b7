<?php
session_start();

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
if(empty($nome)) {
    $_SESSION['erro'] = 'O nome não foi preenchido!';
    header('location:login.php');
} else {
    $_SESSION['nome'] = $nome;
}

header('Location: index.php');