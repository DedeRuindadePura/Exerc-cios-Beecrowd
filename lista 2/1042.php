<?php

$x = readline(); 
$x = explode(' ',$x);


$a = (int)$x[0];
$b = (int)$x[1];
$c = (int)$x[2];


$ordenar = array($a,$b,$c);

asort($ordenar);

foreach( $ordenar as $valor ){
    echo "$valor\n";
}

echo "\n";

echo "$a\n";
echo "$b\n";
echo "$c\n";

?>