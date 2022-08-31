<?php

$numero = -8.4;

// Número absoluto
echo '<h3>Número Absoluto <i><code>abs();</code></i></h3>';
echo abs($numero);
echo '<br><hr>';

// Valor de PI
echo '<h3>Valor de PI <i><code>pi();</code></i></h3>';
echo pi();
echo '<br><hr>';

// Arredondar para baixo
echo '<h3>Arredondar número para baixo <i><code>floor();</code></i></h3>';
$numero = 2.7;
echo floor($numero);
echo '<br><hr>';


// Arredondar para cima
echo '<h3>Arredondar número para cima <i><code>ceil();</code></i></h3>';
$numero = 2.7;
echo ceil($numero);
echo '<br><hr>';

// Arredondar pra cima ou para baixo
echo '<h3>Arredondar número para cima ou para baixo <i><code>round();</code></i></h3>';
$numero = 3.1;
echo round($numero);
echo '<br><hr>';

// Gerar número aleatório
echo '<h3>Gerar número aleatório <i><code>rand();</code></i></h3>';
$aleatorio = rand(0, 1000);
echo $aleatorio;
echo '<br><hr>';

// Verificar número maior
echo '<h3>Verificar número maior <i><code>max();</code></i></h3>';
$lista = [1, 4, 9, 8];
echo max($lista);
echo '<br><hr>';

// Verificar número menor
echo '<h3>Verificar número menor <i><code>min();</code></i></h3>';
$lista = [1, 4, 9, 8];
echo min($lista);
echo '<br><hr>';