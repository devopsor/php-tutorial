<!--
    PHP magic constants
    In this tutorial, you will learn how to use PHP magic constants.

    What is magic constant
     PHP provides a special set of predefined constants that vary depending on where they are used.
     These constants are called magic constants. For example, the value of __line__ depends on the line it is used on in the script.

     Magic constants start with two underscores and end with two underscores.
    The following sections describe some of the most useful PHP magic constants.
-->

<?php

echo "Line number " . __LINE__ . "<br>"; // output： Line number 2
echo "Line number " . __LINE__ . "<br>"; // output Line number 3
echo "Line number " . __LINE__ . "<br>"; // output Line number 4

//Display the absolute path of this file
echo "The full path of this file is: " . __FILE__;
echo "<br>";

//// Display the directory of this file
echo "The directory of this file is: " . __DIR__;
echo "<br>";

function myFunction()
{
    echo "The function name is - " . __FUNCTION__;
}
myFunction(); // output: the function name is - myFunction
echo "<br>";

class MyClass
{
    public function getClassName()
    {
        return __CLASS__;
    }
}
$obj = new MyClass();
echo $obj->getClassName(); // output: MyClass
echo "<br>";

class Sample
{
    public function myMethod(){
        echo __METHOD__;
    }
}
$obj = new Sample();
$obj->myMethod();  // Output: Sample::myMethod 
echo "<br>";


// Line number 15
// Line number 16
// Line number 17
// The full path of this file is: C:\xampp\htdocs\php_tutorial\36_magiconst\index.php
// The directory of this file is: C:\xampp\htdocs\php_tutorial\36_magiconst
// The function name is - myFunction
// MyClass
// Sample::myMethod