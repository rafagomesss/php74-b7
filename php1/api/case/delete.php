<?php

require '../config.php';

$method = mb_convert_case($_SERVER['REQUEST_METHOD'], MB_CASE_LOWER);

if ($method === 'delete') {
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;

    $id = filter_var($id);

    if ($id) {
        $sql = $pdo->prepare('DELETE FROM notes WHERE id = :id');
        $sql->bindValue('id', $id);
        $sql->execute();
    } else {
        $array['error'] = 'Dados não enviados!';
    }
} else {
    $array['error'] = 'Método não permitido!';
}

require '../return.php';
