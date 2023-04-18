<?php
$e = readline(); 
$e = explode(" ", $e);
$x = $e[0];
$y = $e[1];

for ($i = 1; $i <= $y; $i++)
{echo $i;

if ($i % $x == 0 || $i == $y) 
{echo "\n";
    } else {
        echo " ";
    }
}
?>