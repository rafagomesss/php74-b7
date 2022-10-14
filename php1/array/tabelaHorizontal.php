<?php

$array = [
    'nome' => 'Rafael',
    'idade' => 33,
    'empresa' => 'B7Web',
    'cor' => 'azul',
    'profissao' => 'Analista de Sistemas',
];

$chaves = array_keys($array);
$valores = array_values($array);

?>

<h2>Exercício 2 - Tabela Horizontal</h2>

<table border='1'>
    <tr>
        <?php foreach ($chaves as $chave) : ?>
            <th><?= ucfirst($chave); ?></th>   
        <?php endforeach; ?>
    </tr>
    <tr>
        <?php foreach ($valores as $valor) : ?>
            <td><?= ucfirst($valor); ?></td>   
        <?php endforeach; ?>
    </tr>
</table>


