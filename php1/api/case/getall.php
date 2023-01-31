<?php

require '../config.php';

$method = mb_convert_case($_SERVER['REQUEST_METHOD'], MB_CASE_LOWER);

if ($method === 'get') {
    $sql = $pdo->query('SELECT * FROM notes');
    if ($sql->rowCount() > 0) {
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $item) {
            $array['result'][] = $item;
        }
    }
} else {
    $array['error'] = 'Método não permitido!';
}

require '../return.php';
