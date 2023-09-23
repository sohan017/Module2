<?php 

// for ($i=0; $i <10 ; $i= $i+2) { 
//     echo "$i ostad</br>";
// }

for ($i=1; $i <=5 ; $i++) { 
    echo "Times Table of: $i \n";
  
    for ($j=1; $j <=10 ; $j++) { 
      $result = $i * $j;
      echo "$i x $j = $result \n";
    }
    echo "\n";
 }