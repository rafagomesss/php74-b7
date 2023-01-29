<?php

interface UsuarioDao
{
    public function add(Usuario $usuario);
    public function findAll();
    public function findById(int $id);
    public function findByEmail(string $email);
    public function update(Usuario $usuario);
    public function delete(int $id);
}