<?php

/*
    Crear una función que haga echo de "hola mundo!". Probar a llamarla múltiples veces
*/

function HolaMundo() {
    echo "Hola mundo";
}

for( $i = 0; $i < 4; $i++ ) {
    HolaMundo();
}