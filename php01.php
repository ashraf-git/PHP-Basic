<?php
$varyold = 0;
$old = 1;
$new = 1;
for($i = 0; $i < 10; $i++) {
    echo $varyold." ";
    $old = $new;
    $new = $old + $varyold;
    $varyold = $old;
}