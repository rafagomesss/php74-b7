
<h2>Range</h2>

<?php
// gera um array com letras do g até o a (decrescente)
#$array = range('g', 'a');
// gera um array com letras do a até o g (crescente)
#$array = range('a', 'g');

// gera um array do 1 até o 20 (crescente)
#$array = range(1, 20);
// gera um array do 20 até o 1 (decrescente)
#$array = range(20, 1);
// gera um array do 20 até o 1 (decrescente) pulando de 2 em 2 (terceiro parâmetro faz isso) [20, 18, 16, 14...2]
$array = range(20, 1, 2);


foreach($array as $item) {
    echo $item . '<br>';
}