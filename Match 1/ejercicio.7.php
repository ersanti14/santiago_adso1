 <?php

$nota = 80;

$resultado = match (true){
    $nota === 10 => "Reprobaste",
    $nota === 20 => "Esfuerzate mas ",
    $nota === 30 => "Nota baja",
    $nota === 40 => "Repasa mas",
    $nota === 50 => "un poco mas",
    $nota === 60 => "Repasa mas",
    $nota === 70 => "Animate mas",
    $nota === 80 => "Casi lo logras",
    $nota === 90 => "Exelente",
    $nota === 100 => "Felicidades",

    default => "Perimetro no valido"
};

echo $resultado;

?>