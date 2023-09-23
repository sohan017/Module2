<?php 

$number = [1,2,3,4,5];

function squer($n){
    return $n * $n;
}

function cube($n){
    return $n * $n * $n;
}

$cubes   = array_map("cube",$number);
$squeres = array_map("squer",$number);

print_r($cubes);