<?php

$array = [
    'nome' => 'Rafael',
    'idade' => 33,
    'empresa' => 'B7Web',
    'cor' => 'azul',
    'profissao' => 'Analista de Sistemas',
];

$template = "<tr><th>%s</th><td>%s</td></tr>";

?>

<h2>Exercício 1 - Tabela Vertical</h2>

<table border='1'>
<?php
    foreach ($array as $chave => $valor) {
        printf($template, ucfirst($chave), $valor);
    }
?>
</table>


