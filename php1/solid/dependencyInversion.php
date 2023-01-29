<?php
interface DBConnection
{
    public function connect();
}

class MySQLConnection implements DBConnection
{
    public function connect()
    {

    }
}

class OracleConnection implements DBConnection
{
    public function connect()
    {

    }
}

class MongoConnection implements DBConnection
{
    public function connect()
    {

    }
}

class UsuarioDAO
{
    private $db;

    public function __construct(DBConnection $dbCon)
    {
        $this->db = $dbCon;
    }
}

$dbCon1 = new MySQLConnection(...);
$dbCon2 = new OracleConnection(...);
$usuarioDao1 = new UsuarioDAO($dbCon);
$usuarioDao2 = new UsuarioDAO($dbCon);