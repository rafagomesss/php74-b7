
<h2>Key Exists</h2>

<?php

$array = [
    'nome' => 'Rafael',
    'age' => 33,
    'empresa' => 'Estudante',
    'cor' => 'azul',
    'profissao' => 'Analista de Sistemas',
];

// key_exists sinônimo de array_key_exists (nome original)
if (key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo "Idade: $idade anos";
} else {
    echo 'Não existe a chave idade';
}