<?php

define("MIN",1);
define("MAX",100);

$numero = rand(MIN,MAX);

echo $numero;

if($numero % 2 == 0){
    echo " Par";
}else echo " Impar";