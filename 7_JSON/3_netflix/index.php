<?php

// leer pelis.json
$netflix = file_get_contents("pelis.json");

//convertir pelis.json a array
$netflix_array = json_decode($netflix, true);


// iterar y mostrar dicho array

function mostrarPelis($array)
{
    // Contenedor principal para todas las tarjetas (será nuestro flex container)
    echo "<div class='peliculas-container'>";

    foreach ($array as $peli) {
        
        // Div para cada tarjeta individual (será un flex item)
        echo "<div class='pelicula-card'";

        // --- Contenido de la tarjeta ---

        // Titulo
        echo "<h2> $peli[titulo] </h2>";

        // Año y director
        echo "<p><strong>Año: </strong><p> $peli[año]";
        echo "<p><strong>Director: </strong><p> $peli[director]";

        foreach ($peli["generos"] as $genero) {
            echo "$genero ";
        }
    }
    
}

//Opcionales:

// 1) añadir CSS (flexbos, formato tarjetitas, donde los géneros pueden ser badges)
// 2) formulario de filtro por género  (pista: utilizar función in_array())
function filtrarPelis($genero)
{
    global $netflix_array;
    $array_filtrado = array_filter(
        $netflix_array,
        function ($elemento) use ($genero) {
            return in_array($genero, $elemento["generos"]);
        }
    );
    return $array_filtrado;
}
// 3) Repetir el ejercicio pero sólo con JavaScript
// 4) Filtrado dinámico de las películas
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>

<body>
    <h1>Lista de Peliculas</h1>
    <?php
    if (!isset($_GET["genero"]) || empty($_GET["genero"])) {

        mostrarPelis($netflix_array);
    } else {
        $filtradas = filtrarPelis($_GET["genero"]);
        mostrarPelis($filtradas);
    }

    ?>
    <form>
        <label for="genero">Filtrado por género</label>
        <input id="genero" name="genero" type="text">
        <input id="filtrar" type="submit" title="Filtrar">

    </form>


</body>

</html>