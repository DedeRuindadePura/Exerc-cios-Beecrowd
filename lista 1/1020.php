<?php
$idadeEmDias = intval(fgets(STDIN));
$anos = $idadeEmDias / 365;
$meses = ($idadeEmDias % 365) / 30;
$dias = ($idadeEmDias % 365) % 30;
printf("%d ano(s)\n%d mes(es)\n%d dia(s)\n", $anos, $meses, $dias);

?>