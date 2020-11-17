<?php
// $n = 13;
// if($n % 2 == 0){
//     echo "$n is an even number \n";
// }else{
//     echo "$n is not an odd number\n";
// }

// if($n > 10){
//     echo "$n is greater than 10\n";
// }

// $x = 10;
// $y = 10;
// if ($x == $y) {
//     echo "X is equal to Y\n";
// }

// // ==
// // !=
// // >
// // <
// // >=
// // <=

// $alam = 100;
// $rahim = 1000;
// if($alam >= $rahim){
//     echo "Alam is same or more money to Rahim\n";
// }elseif($alam > $rahim){
//     echo "Alam is more money to Rahim\n";
// }elseif($alam < $rahim){
//     echo "Alam is less money to Rahim\n";
// }elseif ($alam == $rahim) {
//     echo "Alam is same money to Rahim\n";
// }

// $age = 13;
// if($age >= 13 && $age <= 19){
//     echo "This person is teenager";
// }else{
//     echo "This person is not teenager";
// }

$food = "apple";
if ("tuna" == $food || "salman" == $food) {
    echo "{$food} has Vitamin D";
}elseif("apple" == $food){
    echo "{$food} doesnot contains Vitamin D";
}else{
    echo "We don't know {$food} contains Vitamin D";
}