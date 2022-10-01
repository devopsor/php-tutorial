<?php

// What are operators in PHP

// Operators are symbols that tell the PHP processor to do something. 
// For example, the plus (+) symbol is the operator that tells PHP to add two variables or values, 
// while the greater-than (>) symbol is the operator that tells PHP to compare two values.

// PHP arithmetic operators
$x =  10 ;
$y =  4 ;
echo ($x + $y) .  "<br>" ;  // output: 14 
echo ($x - $y) .  "<br>" ;  // output: 6 
echo ($x * $y) .  "<br>" ;  // output: 40 
echo ($x / $y) .  "<br>" ;  // output: 2.5 
echo ($x % $y) .  "<br>" ;  // output: 2 

// PHP assignment operator
$x =  25 ;
$y =  35 ;
$z =  "25" ;
echo var_dump($x == $z) ."<br>" ;   // output: boolean true  (check value is equal)
echo var_dump($x === $z) .  "<br>" ;  // output: boolean false (check both value and type are equal)
echo var_dump($x != $y) .  "<br>" ;   // output: boolean true    (check value is equal)
echo var_dump($x !== $z) .  "<br>" ;  // output: boolean true  (check both value and type are equal)
echo var_dump($x < $y) .  "<br>" ;    // output: boolean true 
echo var_dump($x > $y) .  "<br>" ;    // output: boolean false 
echo var_dump($x <= $y) .  "< br>" ;   // output: boolean true 
echo var_dump($x >= $y) .  "<br>" ;  // output: boolean false 

// PHP increment/decrement operators
$x =  10 ;
echo  ++$x ;  // output: 11 
echo "<br>";
echo  $x;    // output: 11
echo "<br>";

$x =  10 ;
echo  $x++;  // output: 10 
echo "<br>";
echo  $x;    // output: 11
echo "<br>";

$x =  10 ;
echo  --$x;  // output: 9 
echo "<br>";
echo  $x;    // output: 9
echo "<br>";

$x =  10 ;
echo  $x--;  // output: 10 
echo "<br>";
echo  $x;    // output: 9 
echo "<br>";

// PHP logical operators
$year =  2014 ;
 // Leap years are divisible by 400 and 4, but not by 100. 
if (($year %  400  ==  0 ) || (($year %  100  !=  0 ) && ($year %  4  ==  0 ))){
     echo  "$year is a leap year." ;
}  else {
     echo  "$year is not a leap year." ;
}
echo "<br>";  // 2014 is not a leap year.


// PHP String Operators
$x =  "Hello" ;
$y =  " World!" ;
echo  $x . $y;  // output: Hello World!
echo "<br>";  

$x .= $y;
echo  $x;  // output: Hello World! 
echo "<br>";  

// PHP array operators
$x =  array ( "a"  =>  "Red" ,  "b"  =>  "Green" ,  "c"  =>  "Blue" );
$y =  array ( "u"  =>  "Yellow" ,  "v"  =>  "Orange" ,  "w"  =>  "Pink" );
$z = $x + $y;  //Concatenation of $x and $y
var_dump($z);
echo "<br>";  

var_dump($x == $y);    // output: boolean false 
echo "<br>";  

var_dump($x === $y);   // output: boolean false 
echo "<br>";  

var_dump($x != $y);    // output: boolean value true 
echo "<br>";  

var_dump($x <> $y);    // output: boolean true 
echo "<br>";  

var_dump($x !== $y);   // output: boolean true 
echo "<br>";  

// Compare Integers 
echo  1  <=>  1 ;  // output: 0 
echo "<br>";  
echo  1  <=>  2 ;  // output: -1 
echo "<br>";  
echo  2  <=>  1 ;  // output: 1
echo "<br>";  

// Compare Floating Point Numbers 
echo  1.5  <=>  1.5 ;  // output: 0 
echo "<br>";  
echo  1.5  <=>  2.5 ;  // output: -1 
echo "<br>";  
echo  2.5  <=>  1.5 ;  // output: 1
echo "<br>";  

// Compare Strings 
echo  "x"  <=>  "x" ;  // output: 0 
echo "<br>";  
echo  "x"  <=>  "y" ;  // output: -1 
echo "<br>";  
echo  "y"  <=>  "x" ;  // output: 1 
echo "<br>";  

// The execution result is as follows;
// 14
// 6
// 40
// 2.5
// 2
// bool(true)
// bool(false)
// bool(true)
// bool(true)
// bool(true)
// bool(false)
// bool(true) < br>bool(false)
// 11
// 11
// 10
// 11
// 9
// 9
// 10
// 9
// 2014 is not a leap year.
// Hello World!
// Hello World!
// array(6) { ["a"]=> string(3) "Red" ["b"]=> string(5) "Green" ["c"]=> string(4) "Blue" ["u"]=> string(6) "Yellow" ["v"]=> string(6) "Orange" ["w"]=> string(4) "Pink" }
// bool(false)
// bool(false)
// bool(true)
// bool(true)
// bool(true)
// 0
// -1
// 1 
// 0
// -1
// 1
// 0
// -1
// 1