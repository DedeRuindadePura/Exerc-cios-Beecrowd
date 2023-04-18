<?php

$X = intval(fgets(STDIN));
$Z = intval(fgets(STDIN));

if($X >= $Z){
        while($X >= $Z){
                $Z = intval(fgets(STDIN));
        }
}

$soma = 0;
$cont = 0;

while($soma < $Z){
        $soma += $X;
        $X++;
        $cont++;
}

echo "$cont\n";


?>