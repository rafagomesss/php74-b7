<?php

$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "Senha Original: $senha<br>";
echo "Hash: $hash";