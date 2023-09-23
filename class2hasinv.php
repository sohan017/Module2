<?php

//variable scope

// $name = "sohan";// global scope

// function greet(){
//     global $name;
//     echo "hello! {$name}";
// }
// greet();

// function greet(){
//     $name = "Sohan";//Local Scope
//     echo "hello! {$name}";

// }
// greet();


//* GLobal Scope

// $counter = 0;
// function increment(){
//     global $counter;
//     $counter++;
// }
// increment();
// increment();
// increment();
// increment();
// echo $counter;

//* Local Scope

// function increment(){
//     $counter = 0;
//     $counter++;
//     echo $counter;
// }
// increment();
// increment();
// increment();
// increment();

//* Static Scope

// function increment(){
//     static $counter = 0;
//     $counter++;
//     echo $counter;
// }
// increment();
// increment();
// increment();
// increment();

//function besic

// function info($name,$getting){ //finction Defination//($name,$getting)2 peramitar is here
//     echo $name." ".$getting;
// }

// info("sohan", "hi");//function argument

//*function default value

// function information($name,$getting="plz help me"){
//     //echo 
//     return $name." ".$getting;
// }
// $name ="sohan";
// $getting = "is working";
// $result = information($name);

// echo $result;

/**
 * by value. pass value in function by variable
 */

//  $name = "sohan";

//  function change($name) {
//     $name = "arafat";
//  }

//  change($name);
//  echo $name;


/**
 * by Referance pass value in function variable
 */

//  $name = "sohan";

//  function change(&$name) {  //use & in function peramitar
//     $name = "arafat";
//  }

//  change($name);
//  echo $name;

/**
 * callback function
 */

//  function add($x,$y){
//     echo "adding $x and $y";
//  }

//  function divide($x,$y){
//     echo "Dividing $x and $y";
//  }

//  function process($n1,$n2,$cb){

//         $cb($n1,$n2);
//  }
//  process(10,20,"add");

//*callback function if condition for worng callback function name

//  function add($x,$y){
//     echo "adding $x and $y";
//  }

//  function divide($x,$y){
//     echo "Dividing $x and $y";
//  }

//  function process($n1,$n2,$cb){

//     if (is_callable($cb)) {
//         $cb($n1,$n2);
//     }else{
//         echo "sorry $cb is not callable";
//     }

    
//  }
//  process(10,20,"adddd");

