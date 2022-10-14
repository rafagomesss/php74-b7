<?php

$arquivo = filter_input(INPUT_GET, 'arquivo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
if (!unlink($arquivo)) {
    echo 'Arquivo não encontrado!';
    exit();
}
echo 'Arquivo excluído com sucesso!';