<?php
$fname = "Isaac";
$lname = "Newton";
$middlename = "Nothing";

printf('His name is %3$s, %1$s %2$s \n', $fname, $middlename, $lname);//arguments
echo "\n";
printf('the binary equivalent of %1$d is %1$b', 12, 12);
echo "\n";

$n = 4.347;
printf("%.2f", $n);

$m = 343.565;//0342;
$n = 34.56754;//0342;
echo "\n";
printf("%07.2f \n", $m);
printf("%07.2f \n", $n);