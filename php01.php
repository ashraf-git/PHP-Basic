<?php
$i = 0;
while ($i < 5){
    echo $i.PHP_EOL;
    $i++;
}
echo "=========\n";
$j= 0;
while ($j++ <5){
    echo $j.PHP_EOL;
}
echo "=========\n";

$j = 0;
while (++ $j < 5){
    echo $j.PHP_EOL;
}
echo "=========\n";

$x = $y = 5;
$x = ++$y;
echo $x.":".$y.PHP_EOL;