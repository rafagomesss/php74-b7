<?php
require 'config.php';
?>
<h1>Cabeçalho <?= $versao; ?></h1>
<hr>

<?php
if (!empty($_COOKIE['nome'])) :
?>

<h2><?= $_COOKIE['nome'];?></h2>

<?php
endif;
?>