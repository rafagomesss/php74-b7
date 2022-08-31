<?php
// Retorna a hora atual medida no número de segundos desde a Era Unix (January 1 1970 00:00:00 GMT).
echo time();
echo '<br><hr>';

// Formatar um timestamp Unix
echo date('d/m/Y H:i:s');
echo '<br>';
// Data padrão universal para salvar no DB
echo date('Y-m-d');
echo '<br>';

$data = '2022-08-30';
echo date('d/m/Y', strtotime($data));
