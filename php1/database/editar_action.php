<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
   $usuarioDao = new UsuarioDaoMysql($pdo);
   $usuario = new Usuario();
   $usuario->setId($id);
   $usuario->setName($name);
   $usuario->setEmail($email);

   $usuarioDao->update($usuario);

   header('Location: index.php');
   exit();

}
header('Location: editar.php?id=' . $id);
exit();