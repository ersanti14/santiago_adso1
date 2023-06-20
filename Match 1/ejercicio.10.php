<?php

$numero = 2;

$resultado = match (true){
    $numero === 1 => "Gato",
    $numero === 2 => "Perro",
    $numero === 3 => "Loro",
    $numero === 4 => "Paloma",
    $numero === 5 => "Elefante",

    default => "ERROR"
};


echo $resultado;

?>