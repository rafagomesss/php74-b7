<h2>Array Splice</h2>

<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

// Remove itens dentro de um array de acordo com os valores informados na função,
// não retorna array, faz por referência
array_splice($array, 1, 1);

// Remove itens dentro de um array de acordo com os valores informados na função
// se você adiciona o 3º parâmetro ele irá "substituir/inserir" um valor.
array_splice($array, 2, 2, ['K', 'O']);

echo '<pre>' . print_r($array, true) . '</pre>';
exit();