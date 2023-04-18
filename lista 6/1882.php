<?php
$soma = 0;

$l = intval(trim(fgets(STDIN)));
$t = fgets(STDIN);

$m = array();

for($i=0;$i<12;$i++){
    for($j=0;$j<12;$j++){
        $m[$i][$j] = doubleval(trim(fgets(STDIN)));
    }
}

for($i=0;$i<12;$i++){
            $soma += $m[$i][$l];  
}



if ($t[0] == "M"){
    $soma = $soma / 12.0;
}

$soma = number_format($soma,1,".","");
echo "$soma\n";


?>