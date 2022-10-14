<?php

// Nome original do arquivo
// $nome = $_FILES['arquivo']['name'];

// Nome randomico
$nome = md5(time().rand(0, 1000)) . '.' . pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

// permitir upload somente de imagens com esses tipos específicos
$arquivoPermitido = in_array($_FILES['arquivo']['type'], ['image/jpg', 'image/jpeg', 'image/png']);

if ($arquivoPermitido && move_uploaded_file($_FILES['arquivo']['tmp_name'], 'uploaded/' . $nome)) {
    echo 'Arquivo salvo com sucesso!';
} else {
    echo "Error[{$_FILES['arquivo']['error']}]: Falha ao salvar arquivo!";
}
