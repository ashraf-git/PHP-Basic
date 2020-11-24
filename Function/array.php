<?php
$n = 12;
$students = [
    "Rahim",
    "kamal",
    "Sabuj",
    123,
    "rana"
];
echo count($students);

$n = count($students);
for($i = 0; $i <$n; $i++){
    echo $students[$i]."\n";
}
for($i = $n-1; $i >= 0; $i--){
    echo $students[$i]."\n";
}