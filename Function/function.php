<?php
include_once "functions.php";

serve();
echo PHP_EOL;
function sum(int $x, int $y, int $z):int {
   
    return $x + $y + $z;
}
echo sum(4, 6, 123);