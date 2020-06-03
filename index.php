<?php

$a = array (10,20,30, 1, 1 ,50, 0, 0, "jonas", "petras");

$b = array_slice($a, 8);

var_dump($b);

for ($i=0;$i<8;$i++) {
   $new[] = $a[$i] * 10;
  }
  
  $result = array_merge($new, $b);

  var_dump($result);

?>