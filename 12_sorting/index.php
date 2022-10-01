<?php

// PHP array sorting
// In this tutorial, you will learn how to sort the elements or keys of an array in ascending or descending order in PHP.

// PHP function to sort an array
// sort() and rsort() — sort an indexed array
// asort() and arsort() — for sorting associative arrays by value
// ksort() and krsort() — for sorting associative arrays by key

$colors = array("Red", "Green", "Blue", "Yellow", "Gray");
print_r($colors);
echo "<br>";
sort($colors);
print_r($colors);
echo "<br>";

// Array ( [0] => Red [1] => Green [2] => Blue [3] => Yellow [4] => Gray )
// Array ( [0] => Blue [1] => Gray [2] => Green [3] => Red [4] => Yellow )
echo "<br>";
$numbers = array(1, 2, 2.5, 4, 7, 10);
print_r($numbers);
echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<br>";
// Array ( [0] => 1 [1] => 2 [2] => 2.5 [3] => 4 [4] => 7 [5] => 10 )
// Array ( [0] => 10 [1] => 7 [2] => 4 [3] => 2.5 [4] => 2 [5] => 1 )

// Sort an associative array in ascending value order

// The asort() function sorts the elements of an associative array in ascending order by value.
// It works like sort() but preserves the association between keys and their values ​​when sorting.
//Define array
echo "<br>";
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
print_r($age);
echo "<br>";
//sort array by value and print
asort($age);
print_r($age);
echo "<br>";

// Array ( [Peter] => 20 [Harry] => 14 [John] => 45 [Clark] => 35 )
// Array ( [Harry] => 14 [Peter] => 20 [Clark] => 35 [John] => 45 )

// Sort an associative array in ascending order by key
echo "<br>";
//Define array
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
print_r($age);
echo "<br>";
//sort the array by key and print
ksort($age);
print_r($age);
echo "<br>";

// Array ( [Peter] => 20 [Harry] => 14 [John] => 45 [Clark] => 35 )
// Array ( [Clark] => 35 [Harry] => 14 [John] => 45 [Peter] => 20 )

// Sort an associative array in descending order by key
//Define array
echo "<br>";
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
print_r($age);
echo "<br>";
//sort the array by key and print
krsort($age);
print_r($age);

// Array ( [Peter] => 20 [Harry] => 14 [John] => 45 [Clark] => 35 )
// Array ( [Peter] => 20 [John] => 45 [Harry] => 14 [Clark] => 35 )
