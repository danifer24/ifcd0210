<?php
/* 
    Crear una función por cada operación básica: suma, resta, multiplicación y división
    Probar individualmente cada función para ver si funcionan correctamente (cuidado con dividir entre 0)

    Una vez hechas, hacer una función que reciba 3 parámetros (numero1, numero2 y operación a realizar):
    Si la función recibe la operación "+", ha de llamar a la función "suma" creada con anterioridad con los números recibidos.
    de igual manera ha ocurrir si recibe la operación "-", "*" y "/"
    Si la operación no es ninguna de las anteriores, se ha de mostrar un mensaje de error: "Operación desconocida"

*/

function suma($x, $y)
{
    $resultado = $x + $y;
    return $resultado;
}

function resta($x, $y)
{
    $resultado = $x - $y;
    return $resultado;
}

function multi($x, $y)
{
    $resultado = $x * $y;
    return $resultado;
}

function división($x, $y)
{
    if ($y === 0)
        return "Error división por 0";

    $resultado = $x / $y;
    return $resultado;
}

function calculadora($x, $y, $op)
{
    $resultado = 0;

    switch ($op) {
        case '+':
            $resultado = suma($x, $y);
            break;

        case '-':
            $resultado = resta($x, $y);
            break;

        case '*':
            $resultado = multi($x, $y);
            break;

        case '/':
            $resultado = división($x, $y);
            break;

        default:
            return "Error operador incorrecto";
    }

    return $resultado;
}

echo calculadora(2,3,'/');