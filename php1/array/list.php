<h2>List</h2>

<?php
// Desconstruir array
$array = ['Gomes', 33, 'café', 'azul'];

$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];

echo "$nome tem $idade anos e gosta de tomar $bebida com a cor $cor";

echo '<br><hr>';

list($nome, $idade, $bebida, $cor) = $array;

echo "$nome tem $idade anos e gosta de tomar $bebida com a cor $cor";