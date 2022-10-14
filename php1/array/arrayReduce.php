<h2>Array Reduce</h2>
<?php
// EXEMPLO 1
$numeros = [1, 2, 3, 4, 5];

function somar($subtotal, $item) {

    $subtotal += $item;
    return $subtotal;
}

$total = array_reduce($numeros, 'somar');

echo $total;
echo '<br><hr>';


// EXEMPLO 2
$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclana', 'sexo' => 'F', 'nota' => 7],
    ['nome' => 'Beltrano', 'sexo' => 'M', 'nota' => 10],
    ['nome' => 'Finger', 'sexo' => 'F', 'nota' => 8],
    ['nome' => 'Mouth', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Foot', 'sexo' => 'F', 'nota' => 9],
];

// Total de homens
function contarQuantidadeHomens($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

$totalHomens = array_reduce($pessoas, 'contarQuantidadeHomens');

echo "Total de homens:" . $totalHomens;

echo '<br><hr>';

// Soma da nota de todos os homens

function somarNotasHomens($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }

    return $subtotal;
}

$somaNotasHomens =  array_reduce($pessoas, 'somarNotasHomens');

echo "A soma da nota dos homens é: " . $somaNotasHomens;

echo '<br><hr>';

// Média da nota dos homens
 $media = $somaNotasHomens / $totalHomens;

 echo "A média da nota dos alunos homens é: " . round($media, 2);