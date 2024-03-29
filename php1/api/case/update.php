<?php

require '../config.php';

$method = mb_convert_case($_SERVER['REQUEST_METHOD'], MB_CASE_LOWER);

if ($method === 'put') {
    parse_str(file_get_contents('php://input'), $input);

    $id = $input['id'] ?? null;
    $title = $input['title'] ?? null;
    $body = $input['body'] ?? null;

    $id = filter_var($id);
    $title = filter_var($title);
    $body = filter_var($body);

    if ($id && $title && $body) {
        $sql = $pdo->prepare('SELECT * FROM notes WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $sql = $pdo->prepare('UPDATE notes SET title = :title, body = :body WHERE id = :id');
            $sql->bindValue('title', $title);
            $sql->bindValue('body', $body);
            $sql->bindValue('id', $id);
            $sql->execute();

            $array['result'] = [
                'id' => $id,
                'title' => $title,
                'body' => $body,
            ];
        } else {
            $array['error'] = 'Nota não encontrada!';
        }
    } else {
        $array['error'] = 'Dados não enviados!';
    }
} else {
    $array['error'] = 'Método não permitido!';
}

require '../return.php';
