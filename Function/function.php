<?php
include_once "functions.php";

serve();
echo PHP_EOL;
function sum($x, $y, int ...$numbers):int {
    echo $x;
   $result = 0;
   for($i = 0; $i <count($numbers); $i++){
       $result += $numbers[$i];
   }
    return $result;
}
echo sum(4, 6, 6, 9);