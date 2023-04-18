<?php

$x = explode(' ',readline());
$a = (float) $x[0];
$b = (float) $x[1];
$c = (float) $x[2];

$delta = pow($b, 2) - (4 * $a * $c);

if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
}
else {
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x1 = number_format($x1, 5, ".","");
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
    $x2 = number_format($x2, 5, ".","");
    
    echo"R1 = $x1\n";
    echo"R2 = $x2\n";
    }
?>