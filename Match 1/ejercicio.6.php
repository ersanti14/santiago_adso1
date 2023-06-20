<?php

$numero = 7;


$resultado = match (true){
    $numero === 1 =>'Enero',
    $numero === 2 =>'Febrero',
    $numero === 3 =>'Marzo',
    $numero === 4 =>'Abril',
    $numero === 5 =>'Mayo',
    $numero === 6 =>'Junio',
    $numero === 7 =>'Julio',
    $numero === 8 =>'Agosto',
    $numero === 9 =>'Septiembre',
    $numero === 10 =>'Octubre',
    $numero === 11 =>'Noviembre',
    $numero === 12 =>'Diciembre',

    default => "Mes invalido"

};


echo $resultado;
?>