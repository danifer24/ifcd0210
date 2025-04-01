<?php

// leer pelis.json
$netflix = file_get_contents("pelis.json");

//convertir pelis.json a array
$netflix_array = json_decode($netflix, true);


// iterar y mostrar dicho array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <table border>
        <tr>
            <th>Título</th>
            <th>Año</th>
            <th>Director</th>
            <th>Género</th>
        </tr>
        <?php
        foreach ($netflix_array as $peli) {
            echo "
                <tr>
                    <td> $peli[titulo] </td>
                    <td> $peli[año]</td>
                    <td> $peli[director]</td>";
            echo "<td>";
            foreach ($peli["genero"] as $genero) {
                echo "$genero ";
            }
            echo "</td>";
        }
        ?>

    </table>
</body>

</html>



