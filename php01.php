<?php
$year = 5000;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
}elseif($year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}elseif($year % 4 == 0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo "\n";
if (true && false) {
    echo "wow";
}

if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}

// if(true && ( || true))