<?php

class A
{
    public function getNome()
    {
        return 'Meu nome é A';
    }
}

class B extends A
{
    public function getNome()
    {
        return 'Meu nome é B';
    }
}

function imprimeNome(A $objeto)
{
    return $objeto->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo imprimeNome($objeto1);
echo '<br>';
echo imprimeNome($objeto2);