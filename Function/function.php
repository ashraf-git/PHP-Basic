<?php
function printN($i){
    if($i>=10){
        return;
    }
    echo $i."\n";
    $i++;
    printN($i);
}
// printN(0);

function printNumber($counter, $end, $steping =2){
    if($counter> $end){
        return;
    }
    echo $counter."\n";
    $counter+=$steping;
    printNumber($counter,$end, $steping);
}
echo printNumber(12, 35, 4);