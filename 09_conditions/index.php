<?php

// PHP conditional statement
// Like most programming languages, PHP also allows you to write code that, at runtime,
// performs different actions based on the results of logic or comparing test conditions.
// This means, you can create test conditions in the form of expressions that evaluate to true or false,
// and based on those results you can do something.

// There are some statements in PHP that can be used to make decisions:

$day = date("D");
echo "<br>";

if ($day == "Fri") {
    echo "Have a nice weekend!";
} else {
    echo "Today is $day!";
}
echo "<br>";

if ($day == "Fri") {
    echo "Have a nice weekend!";
} elseif ($day == "Sun") {
    echo "Happy Sunday!";
} else {
    echo "Today is $day!";
}
echo "<br>";

$age = 15;
if ($age < 18) {
    echo "You are Childen";
} else {
    echo "You are adult";
}
echo "<br>";

echo $age < 18 ? "Children" : "Adult";
echo "<br>";

// Null Coalescing Operator

//Use Ternary Operator (?:)
$name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
echo $name;
echo "<br>";

echo $_GET["name"] ?? "anonymous";
echo "<br>";

// The execution result is as follows:
// Today is Sat!
// Today is Sat!
// You are Childen
// Children
// Jack    // http://localhost/php_tutorial/09_conditions/?name=Jack
// Jack    // http://localhost/php_tutorial/09_conditions/?name=Jack