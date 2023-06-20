<?php


//
$numeros = "3:00";


$resultados = match (true){
    $numeros === "10:30" => "utc 5:30 a.m Hora en Berlín",
    $numeros === "09:00" => "utc 6:00 a.m hora en Dubái",
    $numeros === "1:00" => "utc 2:00 p.m Hora en Boston",
    $numeros === "19:00" => "utc +1 Hora en cuba",


    default => " ERROR"
};


echo $resultados;

?>