<?php

//FUNCÕES
function subsequente() {
    for ($q = 0; $q < 10; $q++) {
        echo $q . '<br>';
    }
}

subsequente();

echo '<br><hr>';
// PARÂMETROS DE FUNÇÕES

function somar($n1, $n2) {
    return $n1 + $n2;
}

$soma = somar(3, 4);
echo "Total: $soma";
echo '<br>';

$x = somar(2, 3);
$y = somar(3, 4);
$w = somar($x, $y);

echo $w;
echo '<br><hr>';

// TYPE E VALOR PADRÃO

function somar2(int $n1, int $n2, int $n3 = 0) {
    $total = $n1 + $n2 + $n3;
    return $total;
}

$z = somar2(7, 3);
echo $z;
echo '<br><hr>';

// PARÂMETROS POR: REFERÊNCIA E VALOR
function somar3($n1, $n2, &$total) {
    $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = 0;

somar3($x, $y, $soma);

echo "$x + $y = $soma";
echo '<br><hr>';

// FUNCOES NATIVAS DO PHP QUE PASSAM VALORES POR REFERÊNCIA

$lista = [4, 9, 2];

sort($lista); //* esse é um exemplo

print_r($lista);

echo '<br><hr>';

//FUNCÕES ANÔNIMAS

$dizimo = function (int $valor) {
    return $valor * 0.1;
};

$funcao = $dizimo;
echo $funcao(82);

echo '<br><hr>';


// ARROW FUNCTION

$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(55);
echo '<br>';

$somar = fn(int $n1, int $n2) => $n1 + $n2;
echo $somar(12, 22);

echo '<br><hr>';


// FUNÇÕES RECURSIVAS

function dividir($numero) {
    $metade = $numero / 2;
    echo "$metade <br>";

    if (round($metade) > 0) {
        dividir($metade);
    }
}

dividir(100);