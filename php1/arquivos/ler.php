<?php

$texto = file_get_contents('texto.txt');
$texto = explode("\n", $texto);

echo "PARÁGRAFOS: " . count($texto);