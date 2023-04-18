<?php

$I=1;
$J=7;
for($cont=1; $cont<=15; $cont++ )
{ echo"I=$I";
  if($cont%3==0){$I=$I+2; $J=5;}
  if($cont%3==1){$J=7;}
  if($cont%3==2){$J=6;}
 
  echo" J=$J\n";
 

}
 

?>