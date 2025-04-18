<?php
/* 
Función "filtrar" que recibe un array de películas
y devuelve otro array con aquellas películas que pertenecen a un género especificado por parámetro


Función "mostrar" que recibe un array de películas 
y las muestra en sus correspondientes divs html como en  el ejercicio 7 del apartado 4_arrays

*/

function filtrarPelis($pelis_array, $genero){
    $resultado = [];
    foreach($pelis_array as $peli){
        if($peli["genero"] === $genero){
            array_push($resultado, $peli);
        }
    }

    return $resultado;
}