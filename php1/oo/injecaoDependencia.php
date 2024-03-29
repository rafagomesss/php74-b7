<h2>Injeção de Dependência</h2>

<?php

interface MatematicaBasica {
    public function somar($x, $y);
}

class Basico1 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        return $x + $y;
    }
}

class Basico2 implements MatematicaBasica
{
    public function somar($x, $y)
    {
        $res = $x;
        for($q = 0; $q < $y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Basico3 implements MatematicaBasica
{
    public function somar($x1, $x2){}
}

class Matematica
{
    private $basico;

    public function __construct(MatematicaBasica $b)
    {
        $this->basico = $b;
    }

    public function somar($x, $y)
    {
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico2());
echo $mat->somar(10, 15);




class Database {
    private $engine;

    public function __construct(DatabaseInterface $eng)
    {
        $this->engine = $eng;
    }

    public function listarTudo()
    {
        return $this->engine->listar();
    }
}


interface DatabaseInterface
{
    public function listar();
}

class MysqlEngine implements DatabaseInterface
{
    public function listar()
    {
        return "Listar: " . __CLASS__;
    }
}

class OracleEngine implements DatabaseInterface
{
    public function listar()
    {
        return "Listar: " . __CLASS__;
    }
}

class MongoEngine implements DatabaseInterface
{
    public function listar()
    {
        return "Listar: " . __CLASS__;
    }
}

$db = new Database(new MysqlEngine());
$db->listarTudo();