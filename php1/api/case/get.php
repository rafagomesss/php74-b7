<?php

require '../config.php';

$method = mb_convert_case($_SERVER['REQUEST_METHOD'], MB_CASE_LOWER);

if ($method === 'get') {
    $id = filter_input(INPUT_GET, 'id');
    if (!empty($id)) {
        $sql = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            $array['result'] = $sql->fetch(PDO::FETCH_ASSOC);
        } else {
            $array['error'] = 'Nota não encontrada!';
        }
    } else {
        $array['error'] = 'ID não enviado!';
    }
} else {
    $array['error'] = 'Método não permitido!';
}

require '../return.php';