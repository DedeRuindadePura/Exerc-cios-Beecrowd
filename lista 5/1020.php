<?php

while (true) {
    $x = explode(" ", fgets(STDIN));
    $D = $x[0];
    $N = trim($x[1]); 

    if ($D == 0 && $N == 0) {
        break;
    }

  
    $N = str_replace($D, "", $N);

    $N = ltrim($N, '0');

 
    if ($N == "") {
        $N = 0;
    }

    echo $N . PHP_EOL;
}
?>