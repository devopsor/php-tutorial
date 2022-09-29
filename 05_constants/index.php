<?php

/* What are constants in PHP */

// Constants are names or identifiers for fixed values. 
// Constants are like variables, except that once defined, 
// constants cannot be undefine or changed ( except for magic constants ).

// Constants are useful for storing data that won't change while the script is running. 
// Common examples of such data include configuration settings such as database usernames and passwords, 
// base URLs for websites, company names, etc.

// Constants are defined using PHP's define() function, which accepts two parameters: 
// the name of the constant and its value. Once a constant value is defined, it can be accessed at any time by referencing its name. 
// Here is a simple example:

// define constant 
define( "SITE_URL" ,  "www.google.com" );
// use constant 
echo  'Thank you for visiting - '  . SITE_URL;
echo "<br>";
/* The difference between constant and variable is as following. */ 

// There is no need to write a dollar sign ($) before constants, 
// whereas in variables you must write a dollar sign before the name.
// Constants cannot be defined by simple assignment, only by define() function.
// Constants can be defined and accessed anywhere, regardless of variable scoping rules.
// Once a constant is set, it cannot be redefined or undefine.

// Valid and invalid constant names

// Valid constant names 
define ( "ONE" ,      "first thing" );
define ( "TWO2" ,     "second thing" );
define ( "THREE_3" ,  "third thing" );
define ( " _THREE_" ,  " third thing" ); 

// invalid constant name 
define ( "2TWO" ,     "second thing" );

echo "ONE: ".ONE."<br>";
echo "TWO2: ".TWO2."<br>";
echo "THREE_3: ".THREE_3."<br>";
// Warning: Use of undefined constant _THREE_ - assumed '_THREE_' (this will throw an Error in a future version of PHP)
// echo "_THREE_: "._THREE_."<br>"; 
//Parse error: syntax error, unexpected '.2' (T_DNUMBER), expecting ';' or ','
// echo "2TWO: ".2TWO;  

// PHP Magic Constants
echo __LINE__;   // 50
echo "<br>";
echo __FILE__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __METHOD__;
echo "<br>";

//Define variables
$txt = "Hello World!";
$num = 123456789;
$colors = array("Red", "Green", "Blue");
//Define variables
print $txt;
print "<br>";
print $num;
print "<br>";
print $colors[0];
print "<br>";
print implode(" and ", $colors);

// Hello World!
// 123456789
// Red
// Red and Green and Blue