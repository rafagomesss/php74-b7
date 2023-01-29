<?php

$senha = '1234';
$hash = '$2y$10$iefq5jrTPDzK06Dg1XM12O3zdWWFZW.ETsOxJ26gqDQPAwKvLH/Gi';

if (password_verify($senha, $hash)) {
    echo 'Senha correta!';
} else {
    echo 'Senha <b>incorreta</b>!';
}