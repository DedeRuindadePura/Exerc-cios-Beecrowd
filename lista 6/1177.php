<?php

$t = intval(fgets(STDIN));

for ($i = 0; $i < 1000; $i++) {
    $n[$i] = $i % $t;
    echo "N[$i] = " . $n[$i] . "\n";
}

?>