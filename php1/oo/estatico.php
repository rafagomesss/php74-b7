<h2>Método estático</h2>

<?php

class Matematica
{
    public static string $nome = 'Gomes';
    public static function somar($x, $y)
    {
        return $x + $y;
    }
}

echo Matematica::somar(10, 20);
echo '<br>';
echo Matematica::$nome;