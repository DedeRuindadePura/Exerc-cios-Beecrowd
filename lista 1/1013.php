<?php
$numeros = explode (" ", fgets(STDIN)); 
$maiorab = ($numeros[0] + $numeros[1] + abs($numeros[0] - $numeros[1]))/2;
$maiorabc = ($maiorab + $numeros[2] + abs($maiorab - $numeros[2]))/2;

print("$maiorabc eh o maior\n");


?>