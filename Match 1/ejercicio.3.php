<?php
$vocal = 'd';

$a = 'a';
$e = 'e';
$i = 'i';
$o = 'o';
$u = 'u';

$x = 'X';
$y = 'y';
$z = 'z';

$resultado = match ($vocal){
    $a => 'es una vocal',
    $e => 'es una vocal',
    $i => 'es una vocal',
    $o => 'es una vocal',
    $u => 'es una vocal',
    $x => 'es del abecedario',
    $y => 'es del abecedario',
    $z => 'es del abecedario',

    default => "no valido"

};

echo $resultado

?>