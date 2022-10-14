<h2>Array Keys & Array Values</h2>

<?php

$array = [
    'nome' => 'Rafael',
    'idade' => 33,
    'empresa' => 'Estudante',
    'cor' => 'azul',
    'profissao' => 'Analista de Sistemas',
];

//guarda apenas as chaves do array passado por parâmetro e cria um novo array
$chaves = array_keys($array);

echo '<pre>' . print_r($chaves, true) . '</pre>';

//guarda apenas os valores do array passado por parâmetro e cria um novo array
$valores = array_values($array);
echo '<pre>' . print_r($valores, true) . '</pre>';