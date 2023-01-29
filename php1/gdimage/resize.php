<?php

$arquivo = 'paisagem.jpg';
$maxWidth = 500;
$maxHeight = 500;

list($originalWidth, $originalHeight) = getimagesize($arquivo);

$ratio = $originalWidth / $originalHeight;
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if ($ratioDest > $ratio) {
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
} else {
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);
$originalImg = imagecreatefromjpeg($arquivo);
imagecopyresampled(
    $imagem,
    $originalImg,
    0,0,0,0,
    $finalWidth,
    $finalHeight,
    $originalWidth,
    $originalHeight
);

header('Content-Type: image/jpeg');
imagejpeg($imagem, 'paisagem_nova.jpg', 100);