<?php

// leer pelis.json
$netflix = file_get_contents("pelis.json");

//convertir pelis.json a array
$netflix_array = json_decode($netflix, true);


// iterar y mostrar dicho array

function mostrarPelis($array)
{
    echo "<table border>
        <tr>
        <th>Título</th>
        <th>Año</th>
        <th>Director</th>
        <th>Género</th>
    </tr>";
    foreach ($array as $peli) {
        echo "
            <tr>
                <td> $peli[titulo] </td>
                <td> $peli[año]</td>
                <td> $peli[director]</td>";
        echo "<td>";
        foreach ($peli["generos"] as $genero) {
            echo "$genero ";
        }
        echo "</td>";
    }
    echo "</table>";
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
    <title>Document</title>
</head>

<body>

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