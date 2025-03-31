<?php

// Sacar el producto y el precio de $_POST
$productName = $_POST["producto"];
$price = $_POST["precio"];

$objeto =[
    "producto" => $productName,
    "precio" => $price
];
// Sacar el contenido de compra.json (es un string)
$compra = file_get_contents("compra.json", true);
// Convertir el contenido de compra.json de string a un array  (json_decode(...))
$compra_array = json_decode($compra);
// Hacer push a dicho array del objeto que contiene el producto y el precio (ojo: respetar la misma estructura que cada objeto del json)
array_push($compra_array, $objeto);
// Reconvertir el fichero a string (json_enconde())
$nuevoJSONtext = json_encode($compra_array, JSON_UNESCAPED_UNICODE);
// Introducir el texto en el fichero compra.json (file_put_contents) -> esto no va a funcionar si todos los ficheros de la carpeta tienen permisos de lectura y escritura (buscar en google)
file_put_contents("compra.json", $nuevoJSONtext);