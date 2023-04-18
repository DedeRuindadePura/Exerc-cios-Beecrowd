<?php

$x = readline(); 
$x = explode(' ',$x);

$n1 = (double)$x[0];
$n2 = (double)$x[1];
$n3 = (double)$x[2];


$ordena = array($n1, $n2, $n3);

rsort($ordena);

$A = $ordena[0];
$B = $ordena[1];
$C = $ordena[2];

if ($A >= $B + $C){ echo "NAO FORMA TRIANGULO\n";}
else if ($A * $A == $B * $B + $C * $C){echo "TRIANGULO RETANGULO\n";}
else if ($A * $A > $B * $B + $C * $C){echo "TRIANGULO OBTUSANGULO\n";}
else if ($A * $A < $B * $B + $C * $C){ echo "TRIANGULO ACUTANGULO\n";}

if ($A == $B && $B == $C){echo "TRIANGULO EQUILATERO\n";}
else if ($A == $B || $B == $C || $A == $C){echo "TRIANGULO ISOSCELES\n";}

?>