<?php

$sal = readline();



if(($sal >= 0) && ($sal <= 400.00)){
	$perc=15;
}	else if (($sal >=400.01) && ($sal<=800.00)){
	$perc=12;
}	else if (($sal >= 800.01) && ($sal <= 1200.00)){
	$perc=10;
}	else if (($sal >= 1200.01) && ($sal <= 2000.00)){
	$perc=7;
}	else{
	$perc=4;
}


$reaj=($sal/100)*$perc;
$salf=$sal+$reaj;

$salf = number_format($salf, 2, ".","");
$reaj = number_format($reaj, 2, ".","");

echo "Novo salario: $salf\n";
echo "Reajuste ganho: $reaj\n";

echo "Em percentual: $perc %\n";

?>