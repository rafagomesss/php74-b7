<h2>Array Slice</h2>

<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

// retorna os itens nas posições informadas na função
$retorno = array_slice($array, -2, 2);

echo '<pre>' . print_r($retorno, true) . '</pre>';
exit();