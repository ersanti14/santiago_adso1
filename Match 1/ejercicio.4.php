
<?php

$numero= '1-enero-2023';


$fecha =  match($numero){
    '1-enero-2023'=> 'Año nuevo',
    '8-marzo-2023'=> 'dia de la mujer',
    '2-abril-2023'=> 'Día Internacional de Libro Infantil y Juvenil',
    '1-mayo-2023' => 'Día Internacional de los Trabajadores',
    '23-junio-2023' => 'Noche de San Juan',

    default => "No existe"
    
};

echo $fecha;
?>

