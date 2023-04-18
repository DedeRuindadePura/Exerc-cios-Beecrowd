<?php

$x = readline(); 
$x = explode(' ',$x);


$a = (double)$x[0];
$b = (double)$x[1];
$c = (double)$x[2];


if((($a>($b-$c)) && ($a>($b-$c))) && ($a<($b+$c))){
	$perimetro = $a + $b + $c;
    $perimetro = number_format($perimetro, 1, ".", "");
    echo "Perimetro = $perimetro\n";
    }
        else{
            $area = (($a+$b)*$c)/2;
            $area = number_format($area, 1, ".", "");
            echo "Area = $area\n";
        }

?>