<?php
$a = readline();
if($a >= 0 and $a <=25){ echo "Intervalo [0,25]\n";}
else if($a > 25 and $a <= 50){ echo "Intervalo (25,50]\n";}
else if($a > 50 and $a <= 75){ echo "Intervalo (50,75]\n";}
else if($a > 75 and $a <= 100){ echo "Intervalo (75,100]\n";}
else { echo "Fora de intervalo\n";}
?>