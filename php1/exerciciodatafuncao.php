<?php
function diaDaSemana($data) 
{
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_ALL, 'pt_BR', 'portuguese.UTF8');
    return strftime('%A', strtotime($data));
}

echo diaDaSemana('2022-08-30');