<?php

$lista_compra = ["Patatas", "Huevos", "Pollo", "Leche"];

for( $i = 0; $i < count( $lista_compra ); $i++ ){
    echo "$lista_compra[$i] ";
}

echo "<br>";

foreach ($lista_compra as $value) {
    echo "$value ";
}