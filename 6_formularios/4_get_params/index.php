<?php
/* 

Crear un programa en php que reciba dos parametros por la URL num1 y num2
en caso de que no se especifiquen, el programa mostrará el texto: "por favor, indique los parámetros correspondientes"
y en caso de que se especifiquen mostrar la suma de ambos números utilizando una función que devuelva: "la suma es: X"


Pista: la función isset($variable), nos permite comprobar si una variable está definida
*/

// comprobar si existen num1 y num2 dentro de $_GET
    // si existen, llamar a la funcion suma (previamente definida)
    // si no existen, echo "por favor especifica num1 y num2"

function suma($a, $b) {
    return "la suma de $a y $b es:" .  " " .    $a + $b;
}

if(isset($_GET['num1']) && isset($_GET['num2'])) {
    echo suma($_GET['num1'], $_GET['num2']);
}else echo "Por favor, especifica num1 y num2";