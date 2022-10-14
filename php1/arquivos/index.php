<?php
$file = filter_input(INPUT_GET, 'file');
$arquivo = filter_input(INPUT_GET, 'arquivo', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

if (!empty($file)) {
    $location = $file === 'excluir' ? "$file.php?arquivo=' . $arquivo" : "$file.php";
    header("Location: $location");
    exit();
}
