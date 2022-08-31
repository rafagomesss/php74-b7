<?php

// TRIM
echo '<h2>Remover espaços em volta das strings "<code>trim();</code>"</h2>';
$nome = '   Rafael   ';
echo trim($nome);
echo '<br><hr>';

// STRLEN
echo '<h2>Verifica tamanho da string "<code>strlen();</code>"</h2>';
$nomeComEspaco = '   Rafael   ';
$nomeSemEspaco = 'Rafael';
echo 'Tamanho da string com espaço: ' . strlen($nomeComEspaco);
echo '<br>';
echo 'Tamanho da string sem espaço: ' .  strlen($nomeSemEspaco);
echo '<br><hr>';

// strtolower
echo '<h2>Deixar todas as letras minúsculas "<code>strtolower();</code>"</h2>';
$nome = 'Rafael';
echo strtolower($nome);
echo '<br><hr>';

// strtoupper
echo '<h2>Deixar todas as letras MAIÚSCULAS "<code>strtoupper();</code>"</h2>';
$nome = 'Rafael';
echo strtoupper($nome);
echo '<br><hr>';

// str_replace
echo '<h2>Substituir conteúdo de uma string "<code>str_replace();</code>"</h2>';
$nome = 'Rafael';
echo str_replace('f', 'ph', $nome);
echo '<br><hr>';

// substr
echo '<h2>Remove trechos especificados pela posição em uma string "<code>substr();</code>"</h2>';
$nomeCompleto = 'Rafael Gomes de Souza';
echo substr($nomeCompleto, 0, 6);
echo '<br><hr>';

// strpos
echo '<h2>Verifica em qual posição da string se encontra um determinado valor "<code>strpos();</code>"</h2>';
$nomeCompleto = 'Rafael Gomes de Souza';
$posicao = strpos($nomeCompleto, 'G');
echo $posicao;
echo '<br><hr>';

// ucfirst
echo '<h2>Torna a primeira letra da string maiúscula "<code>ucfirst();</code>"</h2>';
$nomeCompleto = 'rafael gomes de souza';
echo ucfirst($nomeCompleto);
echo '<br><hr>';

// ucwords
echo '<h2>Torna a primeira letra de cada palavra de uma string maiúscula "<code>ucwords();</code>"</h2>';
$nomeCompleto = 'rafael gomes de souza';
echo ucwords($nomeCompleto);
echo '<br><hr>';

// explode
echo '<h2>Torna a string em um array "<code>ucwords();</code>"</h2>';
$nomeCompleto = 'rafael gomes de souza';
$nomes = explode(' ', $nomeCompleto);
print_r($nomes);
echo '<br><hr>';

// number_format
echo '<h2>Formatação de número "<code>ucwords();</code>"</h2>';
$numero = 12913.12;
echo number_format($numero, 2, ',', '.');
echo '<br><hr>';