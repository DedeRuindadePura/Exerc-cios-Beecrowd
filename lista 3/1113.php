<?php

while (true) {
    $input = fgets(STDIN);
    $values = explode(" ", $input);
    $x = intval($values[0]);
    $y = intval($values[1]);

    if ($x == $y) {
        break;
    }

    if ($x < $y) {
        echo "Crescente\n";
    } else {
        echo "Decrescente\n";
    }
}

?>
