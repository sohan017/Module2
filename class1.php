<?php
/**===================Function======================== */

//*Built-in Functions:

 
// $name = "Sohanur";
// $length = strlen($name);

// echo $length;

//*user define function and peramitar

// function addTwoNumber($x,$y){
//     echo $x+$y;

// }
// addTwoNumber(55,3); 
// addTwoNumber(5,3);
// addTwoNumber(55,54);

//*user function default value

// function addNunber($a,$b,$c=40,$d=50){
//     echo $a+$b+$c+$d;
// }

// addNunber(1,3,4);


//*function peramitar data type hinting

// function mySelf(int $age,string $city){
//     echo "My Age is $age and city is $city";
// }

// mySelf(4,"dhaka");

//*php strick mode in function

// declare(strict_types=1); //strick mode enable

// function mySelf(int $age,string $city){
//     echo "My Age is $age and city is $city";
// }

// mySelf(34,"dhaka");


//*function peramitar multiple data type hinting 

// declare(strict_types=1); //strick mode enable

// function mySelf(int|string $age,int|string $city){
//     echo "My Age is $age and city is $city";
// }

// mySelf("34","dhaka");

//*Function Nullable data type

// declare(strict_types=1); //strick mode enable
// function myName(?string $text){ //Nullable data type
//  echo "$text";
// }

// myName("Sohan");
// myName(null);


//*Variadic Function or Sprade oparetor

// function sum(...$number){
//     echo array_sum($number);
//     echo $number[1];
// }

// sum(2,3,4,5,6,7,7,8,8);

//* row anonymus function

// (function(){
//     $x = 40;
//     $y = 20;
//     echo $x+$y;
// })();

//* anonymus function assign in variable

// $jack = function(){
//     $x = 40;
//     $y = 90;
//     echo $x+$y;
// };

//$jack();

//*paramitar in anonymus function 

// $jack = function($x,$y){
//     echo $x+$y;
// };

// $jack(55,43);


//*Arrow function its a anonymus

// $jack = fn($x,$y)=>$x+$y;

// echo $jack(55,43);


//**function return type int,string,float,null,void
//*function besic return type 

// function addTow($x,$y):int|float{
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// $t = 23;
// $u = 444;
// $result = addTow($t,$u)+10;
// echo $result;

//*function besic return type int

// function addTow($x,$y):int{
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// $t = 23;
// $u = 444;
// $result = addTow($t,$u)+10;
// echo $result;

//*function return type union its use for multiple reture type

// function addTow($x,$y):int|float{
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// $t = 23;
// $u = 444;
// $result = addTow($t,$u)+10;
// echo $result;


//*function return type void, this function dosenot reture

// function addTow($x,$y):void{
//     $sum = ($x+$y)/2;
//     //return $sum;
// }
// $t = 23;
// $u = 444;
// $result = addTow($t,$u)+10;
// echo $result;

//*function return type nillable

// function addTow($x,$y):?float{
//     $sum = ($x+$y)/2;
//     return $sum;
// }
// $t = 23;
// $u = 444;
// $result = addTow($t,$u)+10;
// echo $result;


/**===================Loop======================== */
//*besic for loop

// for ($i=0; $i <10 ; $i= $i+2) { 


//     echo "$i ostad</br>";
// }

//* for loop break

// for ($i=0; $i <10 ; $i= $i+2) { 
//     echo "$i ostad</br>";
//     if ($i=6) {
//         break;
//     }
    
// }

//* for loop continue

// for ($i=0; $i <10 ; $i= $i+2) { 
//     if ($i=6) {
//         continue;
//     }
//     echo "$i ostad</br>";
// }

//* While loop

// $a=0;
// while ($a <= 10) {
//     echo "$a ostad</br>";
//     $a= $a+1;
// }

//* Do While loop

// $a=0;
// do {
//     echo "$a ostad</br>";
//     $a= $a+1;
// } while ($a <= 10);

//* Foreach loop

// $colours = ["red","blue","green","white","yellow"];
// foreach ($colours as $colour) {
//     echo $colour."\n";
// }

//* Nested loop
for ($i=1; $i <=5 ; $i++) { 
   echo "Times Table of: $i \n";
 
   for ($j=1; $j <=10 ; $j++) { 
     $result = $i * $j;
     echo "$i x $j = $result \n";
   }
   echo "\n";
}



// function greet(string $name){
//     echo "Hi ".$name."! Welcome to Progrimming.";
// }
// greet("Sohan");

// function factorial($n)  
// {  
//   if($n <= 1) {  
//     return 1;  
//   }  
//   else{  
//     return $n * factorial($n - 1);  
//   }  
// }  

// echo factorial(6);


// function fibonacci($n){
  
//     $num1 = 0;
//     $num2 = 1;
//     $counter = 0;

//     while ($counter < $n){
//         echo ' '.$num1;
//         $num3 = $num2 + $num1;
//         $num1 = $num2;
//         $num2 = $num3;
//         $counter = $counter + 1;
//     }
// }
  
// $n = 10;
// fibonacci($n);