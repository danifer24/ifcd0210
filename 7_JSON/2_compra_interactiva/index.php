<?php

function mostrarLista()
{
    $compra = file_get_contents("compra.json");
    $compra_array = json_decode($compra, true);
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
    <title>Lista Compra</title>
</head>

<body>
    <h1>Mi lista de la compra</h1>

    <form action="añadir.php" method="post">
        <label for="producto">Producto</label>
        <input id="producto" type="text" name="producto">

        <label for="precio">Precio</label>
        <input id="precio" type="number" step="0.01" name="precio">

        <input type="submit">
    </form>

    <?php mostrarLista() ?>

</body>

</html>