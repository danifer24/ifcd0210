<?php

// Dado el siguiente array, hacer una lista de la compra


$compra=['lechuga', 'yogures', 'arroz'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de la compra</h1>

    <ul>
        <?php
        foreach ($compra as $item) {
            echo "<li> $item </li>";
        }
        ?>
    </ul>

    <ul>
        <?php
        foreach ($compra as $item) {
            echo "
            <li>
             $item 
            </li>";
        }
        ?>
    </ul>

</body>
</html>