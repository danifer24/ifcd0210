<?php

function mostrarLista()
{
    //1) Leer contenido de compra.json ->file_get_contents('ruta_al_fichero') 
    //tip: igualar una variable a la función para guardar el texto en dicha variable
    $compra = file_get_contents("compra.json");
    var_dump($compra);
    //2) Convertir el contenido(string) a un array que pueda iterar -> json_decode($texto_del_json, true)
    $compra_array = json_decode($compra, true);
    //3) Iterar el array renderizando (pintando) el html pertinente 
    echo "<ul>";
    foreach ($compra_array as $key => $value) {
        echo "<li> $value[producto]: $value[precio] </li>";
    }
    echo "</ul>";
}  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        mostrarLista();
    ?>
</body>

</html>