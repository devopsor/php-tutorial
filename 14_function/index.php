<?php

// PHP function

// In this tutorial, you will learn how to create your own custom function in PHP.

//Define function
function today()
{
    echo "Today is " . date('l', mktime());
}
//Call functions
today();
echo "<br>";

// Function with parameters
function getSum1($num1, $num2)
{
    $sum = $num1 + $num2;
    echo "The sum of the two numbers $num1 and $num2 is $sum";
}
getSum1(2, 3);
echo "<br>";

// Function with optional parameters and default values
//Define function
function customFont($font, $size = 1.5)
{
    echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world !</p>";
}

//call function
customFont("Arial", 2);
customFont("Times", 3);
customFont("Courier");
echo "<br>";

// Function with parameters
function getSum2($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}
echo "The sum of the two numbers is " . getSum2(2, 3);

echo "<br>";

//Define function
function divideNumbers($dividend, $divisor)
{
    $quotient = $dividend / $divisor;
    $array = array($dividend, $divisor, $quotient);
    return $array;
}

//Assign variables as arrays
list($dividend, $divisor, $quotient1) = divideNumbers(10, 2);
echo $dividend; // output: 10
echo "<br>";
echo $divisor; // output: 2
echo "<br>";
echo $quotient1; // output: 5
echo "<br>";

//Pass arguments to functions by reference

// In PHP, there are two ways to pass parameters to functions: pass-by-value and pass-by-reference.
// By default, function parameters are passed by value, so if the parameter value changes inside the function,
// it will not be affected by outside the function. However, to allow functions to modify their parameters,
// they must be passed by reference.

/* define a function that multiplies a number
and return the new value */
function selfMultiply(&$number)
{
    $number *= $number;
    return $number;
}

$mynum = 5;
echo $mynum; // output: 5
echo "<br>";
echo gettype($mynum);
echo "<br>";
selfMultiply($mynum);
echo $mynum; // output: 25
echo "<br>";

// Understanding variable scope

//Define function
function test()
{
    $greet = "Hello World!";
    echo $greet;
}
test(); // output: Hello World!
echo "<br>";
// echo $greet; //Notice: Undefined variable
echo "<br>";

$greet = "Hello World!";
echo gettype($greet);
echo "<br>";
//Define the function
function test2()
{
    //  echo  $greet;    // Notice: Undefined variable
}
test2();
echo $greet; // output: Hello World!
echo "<br>";

$greet = "Hello World1!";
//Define the function
function test3()
{
    global $greet;
    echo $greet;
}
test3(); // output: Hello World1!
echo "<br>";
echo $greet; // output: Hello World1!
echo "<br>";
//Assign new value to variable
$greet = "Goodbye";

test3(); // output: Goodbye
echo "<br>";
echo $greet; // output: Goodbye
echo "<br>";

//Define nested array
$species = array(
    "birds" => array(
        "Eagle",
        "Parrot",
        "Swan",
    ),
    "mammals" => array(
        "Human",
        "cat" => array(
            "Lion",
            "Tiger",
            "Jaguar",
        ),
        "Elephant",
        "Monkey",
    ),
    "reptiles" => array(
        "snake" => array(
            "Cobra" => array(
                "King Cobra",
                "Egyptian cobra",
            ),
            "Viper",
            "Anaconda",
        ),
        "Crocodile",
        "Dinosaur" => array(
            "T-rex",
            "Alamosaurus",
        ),
    ),
);

//Define recursive function
function printValues​​($arr)
{
    global $count;
    global $items;

    //check if $arr is an array
    if (!is_array($arr)) {
        die("ERROR: Input is not an array");
    }

    /*
    Traverse the array, if value itself is an array, call recursively
    The function adds the found value to the array of output items,
    and increment the counter by 1 for each value found
     */
    foreach ($arr as $a) {
        if (is_array($a)) {
            printValues​​($a);
        } else {
            $items[] = $a;
            $count++;
        }
    }

    //return the total count and values ​​in the array
    return array('total' => $count, 'values' => $items);
}

// Calculate and print values ​​in nested arrays
$result = printValues​​($species);
echo $result['total'] . ' value(s) found: ';
echo implode(', ', $result['values']);
echo "<br>";


echo gettype($result);

// The execution results are as follows:

// Today is Sunday
// The sum of the two numbers 2 and 3 is 5
// Hello, world !

// Hello, world !

// Hello, world !


// The sum of the two numbers is 5
// 10
// 2
// 5
// 5
// integer
// 25
// Hello World!

// string
// Hello World!
// Hello World1!
// Hello World1!
// Goodbye
// Goodbye
// 16 value(s) found: Eagle, Parrot, Swan, Human, Lion, Tiger, Jaguar, Elephant, Monkey, King Cobra, Egyptian cobra, Viper, Anaconda, Crocodile, T-rex, Alamosaurus
// array