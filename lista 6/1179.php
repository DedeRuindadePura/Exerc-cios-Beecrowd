<?php

$impar = [];
$par = [];
$count_impar = $count_par = 0;

for ($i = 0; $i < 15; $i++) {
    $valor = intval(fgets(STDIN));

    if ($valor % 2 == 0) {
        $par[$count_par] = $valor;
        $count_par++;
        if ($count_par == 5) {
            for ($j = 0; $j < 5; $j++) {
                echo "par[{$j}] = {$par[$j]}\n";
            }
            $count_par = 0;
        }
    } else {
        $impar[$count_impar] = $valor;
        $count_impar++;
        if ($count_impar == 5) {
            for ($j = 0; $j < 5; $j++) {
                echo "impar[{$j}] = {$impar[$j]}\n";
            }
            $count_impar = 0;
        }
    }
}

for ($i = 0; $i < $count_impar; $i++) {
    echo "impar[{$i}] = {$impar[$i]}\n";
}

for ($i = 0; $i < $count_par; $i++) {
    echo "par[{$i}] = {$par[$i]}\n";
}

?>