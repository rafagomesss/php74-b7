<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($name && $email) {
    $usuarioDao = new UsuarioDaoMysql($pdo);

    if ($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setName($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add($novoUsuario);

        header('Location: index.php');
        exit();
    }
}
header('Location: adicionar.php');
exit();