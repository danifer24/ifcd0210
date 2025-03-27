<?php

/**
 * 
 * Completar el siguiente programa para que realice lo siguiente:
 *  -  siempre muestra un listado de películas
 *  - si recibe por URL un parámetro "selected" con un número, debajo de la lista 
 * 
 */

$sci_fi_movies = [
    "Gatacca",
    "Dune",
    "The substance",
    "Ex Machina",
    "The matrix",
    "Interestellar"
];


function showMovies($movies)
{
    echo "<ul>";
    foreach ($movies as $key => $value) {
        echo "<li class='".highlightSelected($value) . "' > $value </li>";
    }
    echo "</ul>";
}

function showSelected()
{
    // comprobar si existe "selected"
    // si existe, mostrar un párrafo con la película seleccionada
    // si no, mostrar "no hay seleccionada ninguna película"
    global $sci_fi_movies;
    if(isset($_GET["selected"])) {
        $selected = $_GET["selected"];
        echo "La película seleccionada es: " . $sci_fi_movies[$selected];
    } else echo "no hay seleccionada ninguna película";
}

function highlightSelected($movie)
{
    //opcional: (🌶️ spicy)
    // - funcion que recibe una película, la compara con la "selected" y, si coincide, añade la clase "highlight" al <li> correspondiente
    // - es necesario utilizar la función dentro del foreach de la funcion showMovies
    global $sci_fi_movies;
    if(isset($_GET["selected"])) {
        $selected = $_GET["selected"];
        if($movie == $sci_fi_movies[$selected]) {
            return "highlight";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5_filter_data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>SciFi Movies</h1>

    <?php showMovies($sci_fi_movies); ?>

    <?php showSelected(); ?>

</body>

</html>