<?php

$number = [1,2,3,4,5,6,7,8,9,10];
isEven(1);
function isEven($n){
    if ($n % 2 == 0) {
        return true;
    }else{
        return false;
    }
}

$evenNumber = array_filter($number,"isEven");
print_r($evenNumber);