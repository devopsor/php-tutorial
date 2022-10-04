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
