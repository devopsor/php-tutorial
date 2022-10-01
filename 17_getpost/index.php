<?php

// What is a string in PHP

// A string is a sequence of letters, numbers, special characters and arithmetic values ​​or a combination of all elements. 
// The easiest way to create a string is to enclose string literals (that is, string characters) in single quotes ('), like this:

// $my_string = 'Hello world';

// Double quotes (") can also be used. 
// However, single and double quotes work differently. 

// Strings enclosed in single quotes are treated almost literally, while strings delimited by double quotes 
// are represented by strings of variable values Form substitution variables, and specifically interpret certain escape sequences.

// The escape sequence is replaced with:
// \n is replaced by a newline
// \r is replaced by a carriage return
// \t is replaced by a tab
// \$ is replaced by the dollar sign itself ($)
// \" is replaced by a double quote (")
// \\ is replaced by a single backslash (\)
// Here is an example to illustrate the difference between single and double quoted strings:

$my_str =  'World' ;
echo  "Hello, $my_str!<br>" ;         // Hello World! 
echo  'Hello, $my_str!<br>' ;          // Hello, $my_str!

echo '<pre>Hello\tWorld!</pre>';   // Hello\tWorld!
echo "<pre>Hello\tWorld!</pre>";  //  Hello   World!
echo 'I\'ll be back';                         //  I'll be back
echo "<br>";

// PHP Manipulating Strings
$my_str = "Welcome to www.google.com";
echo strlen($my_str);
echo "<br>";

// The str_word_count() function counts the number of words in a string.
echo str_word_count($my_str);
echo "<br>";

// str_replace() - replaces text in a string
$my_str =  "If the facts don't match the theory, change the facts. ";
//Display replaced string 
echo  str_replace( "fact" ,  "truth" , $my_str);
echo "<br>";

// You can optionally pass a fourth parameter to the str_place() function, 
// which is used to determine how many replacements the string has performed, as shown below.
$my_str = 'If the facts do not fit the theory, change the facts.';
// perform string replacement 
echo  str_replace( "facts" ,  "truth" , $my_str, $count);
echo "<br>";
// Display the number of replacements performed 
echo  "The text was replaced $count times." ;
echo "<br>";

// strrev() - reverse the string
$my_str = 'You can do anything, but not everything.';
//Display the reversed string 
echo  strrev($my_str);
echo "<br>";


// The execution result is as follows;

// Hello, World!
// Hello, $my_str!
// Hello\tWorld!
// Hello	World!
// I'll be back
// 25
// 5
// If the truths don't match the theory, change the truths.
// If the truth do not fit the theory, change the truth.
// The text was replaced 2 times.
// .gnihtyreve ton tub ,gnihtyna od nac uoY