<?php

while (true) {
    // Lê as coordenadas X e Y
    $input = readline();
    $values = explode(" ", $input);
    $x = intval($values[0]);
    $y = intval($values[1]);

    // Verifica se pelo menos uma das coordenadas é nula
    if ($x == 0 || $y == 0) {
        break;
    }

    // Verifica em qual quadrante a coordenada se encontra
    if ($x > 0 && $y > 0) {
        echo "primeiro\n";
    } elseif ($x < 0 && $y > 0) {
        echo "segundo\n";
    } elseif ($x < 0 && $y < 0) {
        echo "terceiro\n";
    } elseif ($x > 0 && $y < 0) {
        echo "quarto\n";
    }
}

?>