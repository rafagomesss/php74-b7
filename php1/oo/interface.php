<h2>Interface</h2>

<?php

interface Database
{
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
}

class MySqlDB implements Database
{
    public function listarProdutos()
    {

    }

    public function adicionarProduto()
    {
        echo 'Adicionando com ' . __CLASS__;
    }

    public function alterarProduto()
    {

    }
}

class OracleDB implements Database
{
    public function listarProdutos()
    {

    }

    public function adicionarProduto()
    {
        echo 'Adicionando com ' . __CLASS__;
    }

    public function alterarProduto()
    {

    }
}

class NodeDB implements Database
{
    public function listarProdutos()
    {

    }

    public function adicionarProduto()
    {
        echo 'Adicionado com ' . __CLASS__;
    }

    public function alterarProduto()
    {

    }
}

$db = new MySqlDB();
$db->adicionarProduto();
