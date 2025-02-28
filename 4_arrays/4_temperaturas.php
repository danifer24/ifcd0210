<?php

/* 
Dado un array con la temperatura media de  cada día de la semana, sacar:
 - la temperatura máxima, 
 - la mínima 
 - y la temperatura media

*/

$temperaturas = [12, 15, 13, 12, 16, 13, 13];

var_dump($temperaturas);

$max = 0;
$min = 100;
$suma = 0;

for ($i = 0; $i < $count($temperaturas); $i++) {
    $max = $temperaturas[$i] <= $max ? $max : $temperaturas[$i];
    $min = $temperaturas[$i] >= $min ? $min : $temperaturas[$i];
    $suma = $suma + $temperaturas[$i];
}

echo ""