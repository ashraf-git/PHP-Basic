<?php
$n = 12;
$r = $n % 2;
 switch($r){
     case 0:
     echo "{$n} is a even number\n";
     break;
     default:
     echo "{$n} is a odd number";
 }

 $color = 'blue';
 switch($color){
    case "red":
        echo "Red is my favourite colour";
        break;
    case "green":
        echo "Green is my favourite colour";
        break;
    case "blue":
        echo "Blue is not my favourite colour";
        break;
    default:
        echo "This color is ok";

 }


 $color = "green";
 switch($color){
     case "red":
    //     echo "Red is my favourite colour";
    //     break;
    //  case "green":
    //     echo "Green is my favourite colour";
     case "green":
        echo ucwords($color). "is my favourite colour";
        break;
     default:
     echo "This colour is ok";
 }
 echo "\n";
$color = "yellow";
 if ("red" == $color || "green" == $color) {
     echo ucwords($color). " is my favourite colour";
 }else{
     echo "this is ok";  }