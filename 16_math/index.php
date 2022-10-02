<?php

// PHP math operators

// In this tutorial, you will learn how to perform mathematical operations in PHP.

///////////////////////////////////////////////////// Perform mathematical operations
echo 7 + 3; // output: 10
echo '<br>';
echo 7 - 2; // output: 5
echo '<br>';
echo 7 * 2; // output: 14
echo '<br>';
echo 7 / 2; // output: 3.5
echo '<br>';
echo 7 % 2; // output: 1
echo '<br>';

echo 5 + 4 * 10; // output: 45
echo '<br>';
echo (5 + 4) * 10; // output: 90
echo '<br>';
echo 5 + 4 * 10 / 2; // output: 25
echo '<br>';
echo 8 * 10 / 4 - 2; // output: 18
echo '<br>';
echo 8 * 10 / (4 - 2); // output: 40
echo '<br>';
echo 8 + 10 / 4 - 2; // output: 8.5
echo '<br>';
echo (8 + 10) / (4 - 2); // output: 9
echo '<br>';

///////////////////////////////////////////////////// Find the absolute value of a number
echo abs(5) . "<br>"; // output: 5 (integer)
echo abs(-5) . "<br>"; // output: 5 (integer)
echo abs(4.2) . "<br>"; // output: 4.2 (double)
echo abs(-4.2) . "<br>"; // output: 4.2 (double)
echo '<br>';

///////////////////////////////////////////////Round decimal values ​​up or down
//The fraction is rounded up
echo ceil(4.2) . "<br>"; // output: 5
echo ceil(9.99) . "<br>"; // output: 10
echo ceil(-5.18) . "<br>"; // output: -5

//The fraction is rounded down
echo floor(4.2) . "<br>"; // output: 4
echo floor(9.99) . "<br>"; // output: 9
echo floor(-5.18) . "<br>"; // output: -6
echo '<br>';

/////////////////////////////////////////////Find the square root of a number
echo sqrt(9) . "<br>"; // output: 3
echo sqrt(25) . "<br>"; // output: 5
echo sqrt(10) . "<br>"; // output: 3.1622776601684
echo sqrt(-16) . "<br>"; // output: NAN
echo '<br>';

//////////////////////////////////////////Generate some random numbers
echo rand() . "<br>"; // 1723475923
echo rand() . "<br>"; // 200254937
echo '<br>';

//Generate some random number between 1 and 10 (including 1 and 10)
echo rand(1, 10) . "<br>"; // 10
echo rand(1, 10) . "<br>"; // 3
echo '<br>';

///////////////////////////////////////Converting decimal numbers to binary numbers
// Convert decimal to binary
echo decbin(2) . "<br>"; // output: 10
echo decbin(12) . "<br>"; // output: 1100
echo decbin(100) . "<br>"; // output: 1100100
echo '<br>';

// Convert binary to decimal
echo bindec(10) . "<br>"; // output: 2
echo bindec(1100) . "<br>"; // output: 12
echo bindec(1100100); // output : 100
echo '<br>';

//////////////////////////////////Converting decimal numbers to hexadecimal numbers
// Convert decimal to hexadecimal
echo dechex(255) . "<br>"; // output: ff
echo dechex(196) . "<br>"; // output: c4
echo dechex(0) . "<br>"; // output: 0
echo '<br>';

// Convert hex to decimal
echo hexdec('ff') . "<br>"; // output: 255
echo hexdec('c4') . "<br>"; // output: 196
echo hexdec(0); // output: 0
echo '<br>';

////////////////////////////////Convert decimal to octal
// Convert decimal to octal
echo decoct(12) . "<br>"; // output: 14
echo decoct(256) . "<br>"; // output: 400
echo decoct(77) . "<br>"; // output: 115
echo '<br>';

// Convert octal to decimal
echo octdec('14') . "<br>"; // output: 12
echo octdec('400') . "<br>"; // output: 256
echo octdec('115 '); // output: 77
echo '<br>';

///////////////////////////////////////////Convert numbers from one base system to another
// base_convert (number,frombase,tobase);

// Convert decimal to binary
echo base_convert('12', 10, 2) . "<br>"; // Output: 1100
// Convert binary to decimal
echo base_convert('1100', 2, 10) . "<br>"; // output: 12
echo '<br>';
// convert decimal to hex
echo base_convert('10889592', 10, 16) . "<br>"; // output: a62978
// convert hex to decimal
echo base_convert('a62978', 16, 10) . "<br>"; // output: 10889592
echo '<br>';
//Convert decimal to octal
echo base_convert('82', 10, 8) . "<br>"; // Output: 122
//Convert octal to decimal
echo base_convert('122', 8, 10) . " <br>"; // output: 82
echo '<br>';
//convert hex to octal
echo base_convert('c2c6a8', 16, 8) . "<br>"; // output: 60543250
//convert octal to hex
echo base_convert('60543250', 8, 16) . "<br>"; // output: c2c6a8
echo '<br>';
// Convert octal to binary
echo base_convert('42', 8, 2) . "<br>"; // Output: 100010
// Convert binary to octal
echo base_convert('100010', 2, 8) . " <br>"; // output: 42
echo '<br>';
//convert hex to binary
echo base_convert('abc', 16, 2) . "<br>"; // output: 101010111100
//convert binary to hex
echo base_convert('101010111100', 2, 16); // output: abc
echo '<br>';

// The execution results are as follows:

// 10
// 5
// 14
// 3.5
// 1
// 45
// 90
// 25
// 18
// 40
// 8.5
// 9
// 5
// 5
// 4.2
// 4.2

// 5
// 10
// -5
// 4
// 9
// -6

// 3
// 5
// 3.1622776601684
// NAN

// 1196086357
// 2118901981

// 7
// 8

// 10
// 1100
// 1100100

// 2
// 12
// 100
// ff
// c4
// 0

// 255
// 196
// 0
// 14
// 400
// 115

// 12
// 256
// 77
// 1100
// 12

// a62978
// 10889592

// 122
// 82

// 60543250
// c2c6a8

// 100010
// 42

// 101010111100
// abc