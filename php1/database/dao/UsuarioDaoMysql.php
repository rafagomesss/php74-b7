<?php

require_once 'models/Usuario.php';
require_once 'interfaces/UsuarioDao.php';

class UsuarioDaoMysql implements UsuarioDao
{
    private $pdo;

    public function __construct(PDO $driver)
    {
        $this->pdo = $driver;
    }

    public function add(Usuario $usuario)
    {
        $sql = $this->pdo->prepare('INSERT INTO usuarios (nome, email) VALUES (:nome, :email)');
        $sql->bindValue(':nome', $usuario->getName());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->execute();

        $usuario->setId($this->pdo->lastInsertId());
        return $usuario;
    }

    public function findAll(): array
    {
        $array = [];
        $sql = $this->pdo->query('SELECT * FROM usuarios');

        if ($sql->rowCount() > 0) {
            $data = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($data as $item) {
                $usuario = new Usuario();
                $usuario->setId($item['id']);
                $usuario->setName($item['nome']);
                $usuario->setEmail($item['email']);

                $array[] = $usuario;
            }
        }

        return $array;
    }

    public function findById(int $id)
    {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $item = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario = new Usuario();
            $usuario->setId($item['id']);
            $usuario->setName($item['nome']);
            $usuario->setEmail($item['email']);
            return $usuario;
        }
        return false;
    }

    public function findByEmail(string $email)
    {
        $sql = $this->pdo->prepare('SELECT * FROM usuarios WHERE email = :email');
        $sql->bindValue(':email', $email);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $item = $sql->fetch(PDO::FETCH_ASSOC);
            $usuario = new Usuario();
            $usuario->setId($item['id']);
            $usuario->setName($item['nome']);
            $usuario->setEmail($item['email']);
            return $usuario;
        }
        return false;
    }

    public function update(Usuario $usuario)
    {
        $sql = $this->pdo->prepare('UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id');
        $sql->bindValue(':nome', $usuario->getName());
        $sql->bindValue(':email', $usuario->getEmail());
        $sql->bindValue(':id', $usuario->getId());
        return $sql->execute();
    }

    public function delete(int $id)
    {
        $sql = $this->pdo->prepare('DELETE FROM usuarios WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}