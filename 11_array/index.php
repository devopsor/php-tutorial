<?php

$color1 = "Red";
$color2 = "Green";
$color3 = "Blue";

echo $color1;
echo "<br>";
echo $color2;
echo "<br>";
echo $color3;
echo "<br>";

# Array Types in PHP
// You can create three types of arrays. these are:
// Indexed Arrays - Arrays with numeric keys.
// Associative array - An array where each key has its specific value.
// Multidimensional array - An array that itself contains one or more arrays.

////////////////////////////////////////////////////////// Indexed Arrays
$colors1 = ["Red", "Green", "Blue"];
print_r($colors1);
echo "<br>";
echo $colors1[0];
echo "<br>";

$colors2[0] = "Red";
$colors2[1] = "Green";
$colors2[2] = "Blue";
// print array structure
print_r($colors2);
echo "<br>";
echo $colors2[1];
echo "<br>";

////////////////////////////////////////////////////////// Associative Arrays
//define an associative array
$ages = array("Peter" => 22, "Clark" => 32, "John" => 28);
// print the array structure
print_r($ages);
echo "<br>";
echo $ages["Peter"];
echo "<br>";
////////////////////////////////////////////////////////// Multidimensional Arrays

$contacts = array(
    array(
        "name"=>"Peter Parker",
        "email" => "peterparker@gmail.com"
    ),
    array(
        "name"=>"Clark Kent",
        "email" => "clarkent@gmail.com"
    ),
    array(
        "name"=>"Harry Potter",
        "email" => "harrypotter@gmail.com"
    )
);

print $contacts[0]["email"];
echo "<br>";
print $contacts[1]["name"];
echo "<br>";
print $contacts[2]["email"];
echo "<br>";

// View the structure and values ​​of an array
//Define the array 
$cities =  array ( "London" ,  "Paris" ,  "New York" );
//display the city array
print_r($cities);
echo "<br>";
var_dump($cities);
echo "<br>";


// The execution results are as follows:
// Red
// Green
// Blue
// Array ( [0] => Red [1] => Green [2] => Blue )
// Red
// Array ( [0] => Red [1] => Green [2] => Blue )
// Green
// Array ( [Peter] => 22 [Clark] => 32 [John] => 28 )
// 22
// peterparker@gmail.com
// Clark Kent
// harrypotter@gmail.com
// Array ( [0] => London [1] => Paris [2] => New York )
// array(3) { [0]=> string(6) "London" [1]=> string(5) "Paris" [2]=> string(8) "New York" }

