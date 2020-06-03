<?php

$a = array (3, "jonas"=>20,"petras" => 20, "simas" =>30, "ana" => 40, "gita" =>50);

$new_a = array_shift($a);

var_dump($a);

$result = array_slice($a, 0, 3);
var_dump($result);

?>