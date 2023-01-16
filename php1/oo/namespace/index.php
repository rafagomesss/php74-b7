<h2>Namespace</h2>

<?php
require 'classe1.php';
require 'classe2.php';

$a = new classe2\MinhaClasse();
echo $a->testar();

require 'matematica/basico.php';

use matematica\Basico as Basico;
$basico = new Basico();
echo '<pre>' . print_r($basico, true) . '</pre>';
exit();