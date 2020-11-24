<?php
// $name = "Earth";
// function doSomething() {
//     // global $name;
//     // echo $name;
//     echo $GLOBALS['name'];
// }
// doSomething();

// $name = "Earth";
// function doSomething() {
//     global $name;
//     $name = "Earth";
//     // echo $name;
//     // echo $GLOBALS['name'];
// }
// doSomething();
// echo $name;

function doSomething() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i. "\n";
}
function doExtra() {
    static $i;
    $i = $i ?? 0;
    $i++;
    echo $i. "\n";
}
doSomething();
doSomething();
doSomething();
doExtra();
doSomething();
doExtra();
