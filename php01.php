<?php
$n = 6;
$result = 1;
for($i = $n; $i > 1; $i--){
    $result *= $i;
}
echo "Factorial of {$n} is {$result}\n";
// dump way

// smart way
$result = 1;
$j = 1;
for($n = 1; $n <= 10; $n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result}\n";
}
echo "total {$j} number of operations\n";