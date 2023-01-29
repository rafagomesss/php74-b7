<?php

$date = new DateTime();
echo $date->format('d/m/Y');

echo '<br>';

$date1 = new DateTime('2023-01-29 17:12');
$date1->add(DateInterval::createFromDateString('2 days 0 minutes 7 seconds'));

// $date1->setTimezone(new DateTimeZone('America/Sao_Paulo'));
echo $date1->format('d/m/Y H:i:s');

echo '<br>';
$dataInicial = new DateTime('2023-01-01');
$dataFinal = new DateTime('2023-02-15');

$diff = $dataInicial->diff($dataFinal);
echo $diff->format('%a');

echo '<br>';

$today = new DateTime();
$end = new DateTime('2023-12-31');

$diff = $today->diff($end);
echo $diff->format('%y anos, %m meses, %d dias, %h horas, %i minutos, %s segundos');