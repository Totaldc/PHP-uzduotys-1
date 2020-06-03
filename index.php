<?php

$a = array (10,20,30,50,60,70,80);

$b = $a;

$b = array_slice($b, 3);

for ($i=0; $i <= count($b);$i++){
   
    if (($i % 2) == 0){

        unset ($b[$i]);
        
    }

}

var_dump($b);

?>