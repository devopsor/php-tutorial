<!--

    PHP filter
    In this tutorial, you will learn how to sanitize and validate user input in PHP.

    Validate and clean data with filters
    Sanitizing and validating user input is one of the most common tasks in web applications.
    To simplify this task, PHP provides native filter extensions that can be used to sanitize or validate data
    such as email addresses, URLs, IP addresses, etc.

    To use filter extensions to validate data, you need to use PHP's filter_var() function.
    The basic syntax of the function can be given by:

    filter_var (variable, filter, options)
    This function takes three parameters, the last two of which are optional.
    The first parameter is the value to filter on, the second parameter is the ID of the filter to apply,
    and the third parameter is an array of options related to the filter. Let's see how it works.
 -->

<?php

// clean up the string
// The following example will clean up a string by removing all HTML tags in it:

$comment = "<p><h1>Hey! How are you today?</h1></p>";
// clean up and print the comment string
$sanitizedComment = filter_var($comment, FILTER_SANITIZE_STRING);
echo $sanitizedComment;
echo "<br>";

//Validate integer values
// The following example will verify that the value is a valid integer.
// example integer value
$int = 20;
// validate integer value
if (filter_var($int, FILTER_VALIDATE_INT)) {
    echo "<b>$int</b> is a valid integer";
} else {
    echo "<b>$int</b> is not a valid integer";
}
echo "<br>";

// if the variable $int is set to 0,
// the example code will display an invalid integer message.
// To fix this, you need to explicitly test for the value 0, like this:

//Example integer value: FILTER_VALIDATE_INT
$int = 0;
// Validate sample integer value
if (filter_var($int, FILTER_VALIDATE_INT) == 0 || filter_var($int, FILTER_VALIDATE_INT)) {
    echo "The <b>$int</b> is a valid integer";
} else {
    echo "The <b>$int</b> is not a valid integer";
}
echo "<br>";

// Verify IP address: FILTER_VALIDATE_IP
// IP address
$ip = "172.16.254.1";
// Verify example IP address
if (filter_var($ip, FILTER_VALIDATE_IP)) {
    echo "<b>$ip</b> is a valid IP address";
} else {
    echo "<b>$ip</b> is not a valid IP address";
}
echo "<br>";

// IP address : FILTER_FLAG_IPV6
$ip = "172.16.254.1";

// Verify example IP address
if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
    echo "<b>$ip</b> is a valid IPV6 address";
} else {
    echo "<b>$ip</b> is not a valid IPV6 address";
}
echo "<br>";

// Clean and verify email addresses
// The example below will show you how to sanitize and verify email addresses.
// email address
$email = "someone@@example.com";
// remove all illegal characters from email
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
echo $sanitizedEmail;
echo "<br>";
//validate email address
// NOTE: The FILTER_SANITIZE_EMAIL filter removes all invalid characters from 
// the provided email address string except letters, numbers and !#$%&'*+-=?^_`{|}~@.[].
if ($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "$email is a valid email address";
} else {
    echo "$email is not a valid email address";
}
echo "<br>";

// Sanitize and validate URLs
// The following examples will show you how to sanitize and validate URLs.
// example url 
$url =  "http://www.example.com" ;
// remove all illegal characters from the url
$sanitizedUrl = filter_var($url, FILTER_SANITIZE_URL);
// Verify website URL 
if ($url == $sanitizedUrl && filter_var($url, FILTER_VALIDATE_URL)){
     echo  "$url is a valid website URL" ;
}  else {
     echo  "$url is not a valid website URL" ;
}
echo "<br>";

//url 
$url =  "http://www.example.com?topic=filters" ;
//Validate website URL to get query string 
if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
     echo  "<b>$url</b> contains query string" ;
}  else {
     echo  "<b>$url</b> does not contain query string" ;
}
echo "<br>";

// Validate integers in range
// Example integer value 
$int =  75 ;
//Validate sample integer value 
if (filter_var($int, FILTER_VALIDATE_INT,  array ( "options"  =>  array ( "min_range"  =>  0 , "max_range"  =>  100 )))){
     echo  "<b>$int</b> in the range 0 to 100" ;
}  else {
     echo  "<b>$int</b> is not in the range 0 to 100" ;
}

// The execution result are as follows:

// Hey! How are you today?
// 20 is a valid integer
// The 0 is a valid integer
// 172.16.254.1 is a valid IP address
// 172.16.254.1 is not a valid IPV6 address
// someone@@example.com
// someone@@example.com is not a valid email address
// http://www.example.com is a valid website URL
// http://www.example.com?topic=filters contains query string
// 75 in the range 0 to 100
