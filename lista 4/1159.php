<?php

while (true) {
    $x = intval(fgets(STDIN)); // lê o valor de X

    if ($x == 0) break; // encerra o programa se X for zero

    $soma = 0;
    $num_pares = 0;

    // encontra os próximos 5 pares consecutivos a partir de X
    while ($num_pares < 5) {
        if ($x % 2 == 0) {
            $soma += $x;
            $num_pares++;
        }
        $x++;
    }

    echo $soma . "\n"; // imprime a soma dos 5 pares consecutivos
}

?>