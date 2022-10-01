<?php

// PHP loop

// In this tutorial, you will learn how to use loops in PHP to repeat a series of operations.

// Different types of loops in PHP
// A loop can execute the same block of code over and over again as long as certain conditions are met.
// The basic idea of ​​loops is to automate repetitive tasks in a program to save time and effort.
// PHP supports four different types of loops.

// while   — Loops through a block of code as long as the specified condition evaluates to true.
// do…while   — execute a block of code once, then evaluate the condition.
// If the condition is true, the statement is repeated as long as the specified condition is true.
// for   — Iterates over a block of code until the counter reaches the specified number.
// foreach   — A block of code that iterates over each element in an array.

// You will also learn how to use foreach() to loop through the values ​​of an array at the end of this chapter.
// The foreach() loop is designed for use with arrays.

$i = 3;
while ($i > 0) {
    echo "This number is $i";
    echo "<br>";
    $i--;
}
echo "<br>";

// This number is 3
// This number is 2
// This number is 1

$i = 3;
do {
    echo "This number is $i";
    echo "<br>";
    $i--;
} while ($i > 0);
echo "<br>";

for ($i = 0; $i < 5; $i++) {
    echo "This number is $i";
    echo "<br>";
}
echo "<br>";

$colors = array("Red", "Green", "Blue");
foreach ($colors as $value) {
    echo $value;
    echo "<br>";
}
echo "<br>";

$superhero = array(
    "name" => "Peter Parker",
    "email" => "peterparker@mail.com",
    "age" => 18,
);

//traverse $superhero array
foreach ($superhero as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

// The exectuion result is follows:

// This number is 3
// This number is 2
// This number is 1

// This number is 3
// This number is 2
// This number is 1

// This number is 0
// This number is 1
// This number is 2
// This number is 3
// This number is 4

// Red
// Green
// Blue

// name : Peter Parker
// email : peterparker@mail.com
// age : 18
