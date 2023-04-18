<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];


if($a >= $b){
    $quant = (24 - $a) + $b; 
} else if($b > $a){
    $quant = $b - $a;
}

echo "O JOGO DUROU $quant HORA(S)\n"

?>