<?php

$x = readline(); 
$x = explode(' ',$x);

$a = (int)$x[0];
$b = (int)$x[1];


if ($a > $b)
{
   $maior = $a;
    $menor = $b;
} else if ($a < $b)
{
    $maior = $b;
    $menor = $a;
}

if ($maior % $menor == 0) { echo "Sao Multiplos\n"; } 
else { echo "Nao sao Multiplos\n"; }


?>