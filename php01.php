<?php
$n = 12;
if($n%2 == 0){
    echo "even number";
}else{
    echo "odd number";
}
echo PHP_EOL;

if($n%2 == 0):
    echo "even number";
    echo PHP_EOL;
    echo "some text";
  
else: echo "odd number";
    echo PHP_EOL;
    echo "some text ++";
endif;

echo PHP_EOL;
switch($n%2==0):
    case 0:
        echo "even number";
        break;
        default:
        echo "odd number";
    endswitch;
    echo PHP_EOL;
  

    $n = 15;
if ($n % 2 == 0):
    ?>
    even number
    some text
    <?php
    else: 
        ?>
        odd number
        some text ++
        <?php
        endif;
