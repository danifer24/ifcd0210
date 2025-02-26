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
            <th">Tabla del 7</th>
        </tr>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<td>7x$i</td>";
            }
            ?>
        </tr>
        <tr>
            <?php
            for ($i = 1; $i <= 10; $i++) {
                $resul = 7 * $i;
                echo "<td>$resul</td>";
            }
            ?>
        </tr>
    </table>
</body>

</html>