<?php
$x = 7;
$y = 6;

function greaterOrSmaller($x, $y){
    if($x>$y){
        return 1;
    }elseif($x==$y){
        return 0;
    }else{
        return -1;
    }
}
if(greaterOrSmaller($x,$y) == 1){ 
    echo "{$x} is greater than {$y}";
}else if(greaterOrSmaller($x,$y) == 0){
    echo "{$x} is equal to {$y}";
}else if(greaterOrSmaller($x,$y) == -1){
    echo "{$x} is less than {$y}";
}

echo PHP_EOL;
$result = $x<=>$y;
if($result==1){
    echo "{$x} is greater than {$y}";
}else if($result==0){
    echo "{$x} is equal to {$y}";
}else if($result==-1){
    echo "{$x} is less than {$y}";
}