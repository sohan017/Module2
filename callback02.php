<?php 


$people = [
    ['name'=>'A','Gender'=>'M'],
    ['name'=>'B','Gender'=>'F'],
    ['name'=>'C','Gender'=>'M'],
    ['name'=>'D','Gender'=>'F'],
    ['name'=>'E','Gender'=>'M'],
];

function isMale($person){
    if ($person['Gender']=='M') {
        return true;
    }
    return false;
    
}

function isfemale($person){
    if ($person['Gender']=='F') {
        return true;
    }
    return false;
    
}

$males = array_filter($people, "isMale");
$female = array_filter($people, "isfemale");

print_r($males);