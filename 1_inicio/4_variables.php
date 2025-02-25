<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php
     $cadena = "Esto es una cadena";
     $num1 = rand(1,10);
     $num2 = rand(1,10);
     $booleano = false;

     echo $cadena . " concatenada";
     echo "<br>";
     echo $num1 . " más " . $num2 . " es " . $num1 + $num2;
     echo "<br>";
     echo $num1 . " entre " . $num2 . " es " . $num1 / $num2;
     echo "<br>";
     echo "El resto de " . $num1 . " entre " . $num2 . " es " . $num1 % $num2;
     echo "<br>";
     if($num1 > $num2) echo "$num1 es mayor que $num2";
     else echo "$num1 no es mayor que $num2";
     echo "<br>";
     echo "La variable booleana es igual a " . $booleano;
     echo "<br>";
     echo !$booleano;
     ?>
</body>
</html>