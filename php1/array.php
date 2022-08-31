<?php

//VERIFICAR TAMANHO ARRAY count();
echo '<h2>Verifica o tamanho do array "<code>count();</code>"</h2>';
$lista = ['nome1', 'nome2', 'nome3', 'nome4'];
echo 'TOTAL: ' . count($lista);
echo '<br><hr>';

//RETORNA DIFERENÇA ENTRE ARRAYS array_diff();
echo '<h2>Verifica diferença entre arrays "<code>array_diff();</code>"</h2>';
$lista = ['Rafael', 'Pedro', 'Paulo', 'José', 'Francisca', 'Paula'];
$aprovados = ['Rafael', 'Pedro', 'José', 'Francisca'];

$reprovados = array_diff($lista, $aprovados);
print_r($reprovados);
echo '<br><hr>';

//FILTRAR ARRAYS;
echo '<h2>Verifica diferença entre arrays "<code>array_filter();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

$filtrados = array_filter($numeros, function($item) {
    if ($item < 30) {
        return true;
    }
    return false;
});

print_r($filtrados);
echo '<br><hr>';

//FUNÇÃO PARA MANIPULAR ITENS DE UM ARRAY;
echo '<h2>Manipula os itens de um array "<code>array_map();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

$dobrados = array_map(function($item) {
    return $item * 2;
}, $numeros);

print_r($dobrados);
echo '<br><hr>';

//REMOVE O ÚLTIMO ITEM DO ARRAY  array_pop (O ARRAY É UTILIZADO/PASSADO POR REFERÊNCIA)
echo '<h2>Remove o último item de um array "<code>array_pop();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];
array_pop($numeros);
print_r($numeros);
echo '<br><hr>';

//REMOVE O PRIMEIRO ITEM DO ARRAY  array_shift (O ARRAY É UTILIZADO/PASSADO POR REFERÊNCIA)
echo '<h2>Remove o primeiro item de um array "<code>array_shift();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];
array_shift($numeros);
print_r($numeros);
echo '<br><hr>';

//VERIFICA SE EXISTE ALGUM VALOR DENTRO DE UM ARRAY
echo '<h2>Verifica se existe um valor dentro de um array "<code>in_array();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

if (in_array(91, $numeros)) {
    echo 'EXISTE';
} else {
    echo 'NÃO EXISTE';
}
echo '<br><hr>';

//VERIFICA SE EXISTE ALGUM VALOR DENTRO DE UM ARRAY E RETORNA A POSIÇÃO DESSE ITEM
echo '<h2>Verifica se existe um valor dentro de um array e retorna a posição desse item "<code>array_search();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

$pos = array_search(91, $numeros);
echo $pos;

echo '<br><hr>';

//ORDENA DE FORMA CRESCENTE UM ARRAY
echo '<h2>Ordena de forma crescente um array "<code>sort();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

sort($numeros);
print_r($numeros); 
echo '<br><hr>';

//ORDENA DE FORMA REVERSA UM ARRAY 
echo '<h2>Ordena de forma reversa um array "<code>rsort();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

rsort($numeros);
print_r($numeros); 
echo '<br><hr>';

//ORDENA DE FORMA CRESCENTE UM ARRAY PRESERVANDO ÍNDICES
echo '<h2>Ordena de forma crescente um array preservando índices "<code>asort();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

asort($numeros);

print_r($numeros); 
echo '<br><hr>';

//ORDENA DE FORMA REVERSA UM ARRAY PRESERVANDO ÍNDICES
echo '<h2>Ordena de forma reversa um array preservando índices "<code>arsort();</code>"</h2>';
$numeros = [10, 20, 24, 91, 18];

arsort($numeros);

print_r($numeros); 
echo '<br><hr>';

//TRANSFORMAR STRING EM ARRAY
echo '<h2>Transforma string em array "<code>explode();</code>"</h2>';
$nome = 'Rafael Gomes De Souza';

$nomes = explode(' ', $nome);

print_r($nomes); 
echo '<br><hr>';


//TRANSFORMAR ARRAY EM STRING
echo '<h2>Transforma array em string "<code>implode();</code>"</h2>';
$nomes = ['Rafael', 'Gomes', 'de' , 'Souza'];

$nome = implode(' ', $nomes);

echo $nome; 
echo '<br><hr>';




