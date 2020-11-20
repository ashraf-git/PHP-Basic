<?php
$n = 4;
for($i = $n, $factorial = 1; $i>1; $i--){
    // $factorial = $factorial * $i;
    $factorial *= $i;
    


}
printf("factorial of %d is %d\n",$n, $factorial,);