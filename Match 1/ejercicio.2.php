<?php
$color = 'verde';

$action  = match ($color){
    'blanco' => 'El color es simple',
    'rojo' => 'El color es calido',
    'rosado' => 'El color es clarito',
    'negro' => 'El color es oscuro',

    default => 'color desconocido'
};

echo $action;
?>
