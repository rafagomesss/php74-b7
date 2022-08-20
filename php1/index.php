<?php

// TIPOS BÁSICOS STRING
$nome = 'rafael'; // string
$idade = 33; // integer
$dormindo = true; // boolean
$vazia = null; // null
$sobrenome = ''; // string vazia

// MESCLANDO VARIÁVEIS
echo '<h2>Mesclando Variáveis</h2>';
$nome = 'Rafael';
$sobrenome = 'Gomes de Souza';
$idade = 90;  

$frase = "$nome $sobrenome tem $idade anos.";

echo $frase;
echo '<br>';

$x = 3;
$y = 4;

//34
$w = $x . $y;
echo $w;
echo '<br>';

$nome = 'Rafael';
$sobrenome = ' Gomes de Souza';
$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome;

echo $nomeCompleto;
echo '<br>';

$texto1 = 'texto1';
$texto2 = 'texto2';

$frase = $texto1 . $texto2;
echo $frase;
echo '<br><hr>';

// ARRAYS
echo '<h2>Arrays</h2>';
$ingredientes = [
    'Açucar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó',
];

echo $ingredientes[4];
echo '<br>';

$numerosMegaSena = [10, 14, 27, 34, 8];

echo 'Número 1: ' . $numerosMegaSena[0] . '<br>';
echo '<br><hr>';

// ARRAY SPREAD
echo '<h2>Arrays Spread</h2>';
$bolo1 = [
    'Açucar',
    'Farinha de trigo',
    'Ovo',
    'Leite',
    'Fermento em pó',
];

$bolo2 = [
    'Vasilha',
    'Água Morna',
    ...$bolo1,
    'Corante',
];

echo $bolo2[2];
echo '<br>';

$lista1 = ['Rafael', 'Fulano', 'Ciclano'];
$lista2 = ['Mariah', 'a Mariah', 'ela Mariah'];
$lista3 = [...$lista1, ...$lista2];

echo '<pre>' . print_r($lista3, true) . '</pre>';
echo '<br><hr>';

// PRIMEIRO EXERCÍCIO
echo '<h2>Primeiro Exercício </h2>';
echo 'Corrigir:<br>';
echo '<pre>

$lista = [
    "nome" => "Rafael",
    "idade" => 90,
    "atributos" => [
        "forca" => 60,
        "agilidade" => 80,
        "destreza" => 50,
    ],
    vida = 1000,
    mana = 928,  
];
</pre>';

/*
$lista = [
    "nome" => "Rafael",
    "idade" => 90,
    "atributos" => [
        "forca" => 60,
        "agilidade" => 80,
        "destreza" => 50,
    ],
    vida = 1000, // errado
    mana = 928,  // errado
];
*/

$lista = [
    "nome" => "Rafael",
    "idade" => 90,
    "atributos" => [
        "forca" => 60,
        "agilidade" => 80,
        "destreza" => 50,
    ],
    "vida" => 1000,
    "mana" => 928,  
];

echo '<pre>' . print_r($lista, true) . '</pre>';
echo '<br>';
echo 'NOME: ' . $lista['nome'] . '<br>';
echo 'FORÇA: ' . $lista['atributos']['forca'] . '<br>';
echo 'VIDA: ' . $lista['vida'] . '<br>';
echo '<br><hr>';

// CONDICIONAL IF
echo '<h2>CONDICIONAL IF</h2>';
$idade = 40;

if ($idade < 18) {
    echo 'Menor de idade';
} else {
    echo 'Maior de idade';
}
echo '<br><hr>';

// CONDICIONAL TERNÁRIO
echo '<h2>OPERADOR TERNÁRIO</h2>';
echo ($idade < 18) ? 'Menor de idade' : 'Maior de idade';
echo '<br><hr>';

// CONDICIONAL NULL CAO (COALESCING ASSIGNMENT OPERATOR)
echo '<h2>CONDICIONAL NULL COALESCING ASSIGNMENT OPERATOR</h2>';
$novoNome = 'Rafael';
// $novoSobrenome = ' Gomes';

$novoNomeCompleto = $novoNome;
// $novoNomeCompleto .= isset($novoSobrenome) ? $novoSobrenome : ''; // MODO ANTIGO
$novoNomeCompleto .= $novoSobrenome ?? ''; // MODO null cao

echo $novoNomeCompleto;
echo '<br><hr>';

// CONDICIONAL SWTICH
echo '<h2>CONDICIONAL SWTICH</h2>';
$tipo = 'texto';

switch($tipo) {
    case 'foto':
        echo 'Exibindo FOTO';
        break;
    case 'video':
        echo 'Exibindo VIDEO';
        break;
    case 'texto':
        echo 'Exibindo TEXTO';
        break;
}

echo '<br><hr>';

// LOOP WHILE
echo '<h2>LOOP WHILE</h2>';
$numero = 0;

while($numero < 10) {
    echo "N: $numero<br>";
    $numero++;
}
echo '<br><hr>';

//LOOP FOR
echo '<h2>LOOP FOR</h2>';
for($numero = 0; $numero < 10; $numero += 1) {
    echo "N: $numero<br>";
}

$numero++;
$numero += 1;
$numero = $numero + 1;

for($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

echo '<br><hr>';

// LOOP FOREACH
echo '<h2>LOOP FOREACH</h2>';

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
];

echo '<h3> Ingredientes </h3>';
echo '<ul>';
foreach ($ingredientes as $indice => $ingrediente) {
    echo "<li>Item $indice: $ingrediente</li>";
}
echo '</ul>';
echo '<br><hr>';

