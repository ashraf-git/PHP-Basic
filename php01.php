<?php
// for($i=20;$i<50;$i++){
//     if($i % 13 == 0){
//         echo $i;
//         break;
//     }
// }
for($i=20;$i<30;$i++){
    if($i<27){
        continue;
    }
    echo $i.PHP_EOL;
}
echo "\n";
for($i=20;$i<30;$i++){
    if($i<27){
        goto a;
    }
    echo $i.PHP_EOL;
    a: '';
}