<!--
    PHP exception handling
    In this tutorial, you will learn how to throw and catch exceptions in PHP.
    What is an exception
    An exception is a signal that some unusual event or error has occurred. Exceptions can occur for many reasons,
    for example, a database connection or query failed, the file you are trying to access does not exist, and so on.

    PHP provides a powerful exception handling mechanism that enables you to handle exceptions in a graceful manner.
    Contrary to PHP's traditional error handling system, exception handling is an object-oriented approach to handling errors that
    provides a more specific and flexible form of error reporting. The exception model was first introduced in PHP 5.

 -->

<?php

// Using Throw and Try...Catch Statements
// In the exception-based approach, the program code is written in a try block, and when an exception event occurs
// during the execution of the code in the try block, an exception can be thrown using the throw statement.
// It is then captured and parsed by one or more capture blocks.
// The following example demonstrates how exception handling works:

function division($dividend, $divisor)
{
    //If the division is zero, throw an exception
    if ($divisor == 0) {
        throw new Exception('Division by zero.');
    } else {
        $quotient = $dividend / $divisor;
        echo "<p>$dividend / $divisor = $quotient</p>";
    }
}
try {
    division(10, 2);
    division(30, -4);
    division(15, 0);
    //If an exception is thrown, the following lines will not be executed
    echo '<p>All executed successfully. </p>';
} catch (Exception $e) {
    //Handle exception
    echo "<p>Caught exception: " . $e->getMessage() . "</p>";
}
// continue
echo "<p>Hello World!</p>";

// 10 / 2 = 5
// 30 / -4 = -7.5
// Caught exception: Division by zero.
// Hello World!





// Code usage explanation
// There are four basic parts of the exception handling system in PHP: try, throw, catch, and Exception classes.
// The following list describes how each section works.
// The division() function in the above example checks if the divisor is equal to zero.
//If it is, an exception is thrown via PHP's throw statement. Otherwise, this function performs division with the given number and displays the result.

// Then, the division() function is called with different parameters in the try block.
// If an exception is generated while executing code in a try block, PHP will stop execution at that point and try to
// find the corresponding catch block. If found, the code in the catch block is executed, otherwise a fatal error is generated.
// The catch block usually catches the exception thrown in the try block and creates an object ($e) containing the exception information.
// Error messages from this object can be retrieved using the exception's getMessage() method.
// The exception class in PHP also provides getCode(), getFile(), getLine() and getTraceAsString() methods which
// can be used to generate detailed debugging information.

//Turn off default error reporting
error_reporting(0);
try {
    $file = "somefile.txt";
    //try to open file
    $handle = fopen($file, "r");
    if (!$handle) {
        throw new Exception("Cannot open file!", 5);
    }
    // try to read the file content
    $content = fread($handle, filesize($file));
    if (!$content) {
        throw new Exception("Could not read file!", 10);
    }
    //Close the file handle
    fclose($handle);
    //Display file content
    echo $content;
} catch (Exception $e) {
    echo "<h3>Caught Exception!</h3>";
    echo "<p>Error message: " . $e->getMessage() . "</p>";
    echo "<p>File: " . $e->getFile() . "</p>";
    echo "<p>Line: " . $e->getLine() . "</p>";
    echo "<p>Error code: " . $e->getCode() . "</p>";
    echo "<p>Trace: " . $e->getTraceAsString() . "</p>";
}

// Caught Exception!
// Error message: Cannot open file!
// File: C:\xampp\htdocs\php_tutorial\39_exception\index.php
// Line: 71
// Error code: 5
// Trace: #0 {main}




// Define custom exception
// You can even define your own custom exception handler to handle different types of exceptions differently.
// It allows you to use separate catch blocks for each exception type.
// You can define custom exceptions by extending the Exception class, since Exception is the base class for all exceptions.
// The custom exception class inherits all the properties and methods of the PHP Exception class. You can also add custom
// methods to custom exception classes. Let's look at the following example:
class EmptyEmailException extends Exception
{}
class InvalidEmailException extends Exception
{}

$email = "someuser@example..com";

try {
    //If the email is empty, throw an exception
    if ($email == "") {
        throw new EmptyEmailException("<p>Please enter your email address!</p>");
    }

    //If the email is invalid, throw an exception
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        throw new InvalidEmailException("<p><b>$email</b> is not a valid email address! </p>");
    }

    // If the email is valid, display a success message
    echo "<p>Success: Email verification succeeded.</p>";
} catch (EmptyEmailException $e) {
    echo $e->getMessage();
} catch (InvalidEmailException $e) {
    echo $e->getMessage();
}

// someuser@example..com is not a valid email address!



// Set global exception handler
// As discussed earlier in this chapter, if an exception is not caught,
// PHP generates a fatal error with an "Uncaught Exception..." message.
// This error message may contain sensitive information, such as the file name and line number in question.
// If you don't want to expose such information to the user, you can create a custom function and
// register it with the set_exception_handler() function to handle all uncaught exceptions.
function handleUncaughtException($e)
{
    //Display a generic error message to the user
    echo "Oops! Something went wrong. Please try again and contact us if the problem persists.";

    // Construct the error string
    $error = "Uncaught Exception: " . $message = date("Ymd H:i:s - ");
    $error .= $e->getMessage() . " in file " . $e->getFile() . " on line " . $e->getLine() . "\n";

    //Log error details in file
    error_log($error, 3, "exceptionLog.log");
}

//Register custom exception handler
set_exception_handler("handleUncaughtException");

// throw exception
throw new Exception("Testing Exception!");

// Oops! Something went wrong. Please try again and contact us if the problem persists.