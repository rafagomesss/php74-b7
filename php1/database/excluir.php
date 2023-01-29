<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!empty($id)) {
    $usuarioDao = new UsuarioDaoMysql($pdo);
    $usuarioDao->delete($id);
}

header('Location: index.php');
exit();