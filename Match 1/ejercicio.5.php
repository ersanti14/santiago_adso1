<?php

$dia = 7;

$resultado = match (true){

    $dia === 1 =>'Lunes',
    $dia === 2 =>'Martes',
    $dia === 3 =>'Miercoles',
    $dia === 4 =>'Jueves',
    $dia === 5 =>'Viernes',
    $dia === 6 =>'Sabado',
    $dia === 7 =>'Domingo',

    default => "no existe"
};

echo $resultado;
?>