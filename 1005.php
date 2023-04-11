<?php 
  $A = fgets(STDIN);
  $B = fgets(STDIN);
  
  $A = number_format($A, 1, ".", "");
  $B = number_format($B, 1, ".", "");

  $media = ($A * 3.5 + $B * 7.5)/11;
  $media = number_format($media, 5, ".", "");
  echo "MEDIA = $media\n";
  ?>