<?php

/**FORMA ERRADA
class Usuario
{
    public function setName() {}
    public function getName() {}

    public function add() {}
    public function update() {}
    public function delete() {}
}
*/

class Usuario
{
    public function setName() {}
    public function getName() {}
}

class UsuarioDB
{
    public function add(Usuario $usuario) {}
    public function update(Usuario $usuario) {}
    public function delete($id) {}
}