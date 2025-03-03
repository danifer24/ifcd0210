<?php
/* 
   Crear una función suma que reciba dos números como parámetros
   y muestra por pantalla su suma con un echo

   Hacer otra versión de la función, pero esta vez tiene que devolver el valor
    
*/

function suma($x, $y)
{
    $resultado = $x + $y;
    echo "La suma es $resultado <br>";
}

function suma_ret($x, $y)
{
    $resultado = $x + $y;
    return "La suma es $resultado <br>";
}

suma(2, 5);

$suma = suma_ret(2, 5);
echo $suma;
