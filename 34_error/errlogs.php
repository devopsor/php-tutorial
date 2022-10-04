<!--
    ※Log error messages in a text file
    You can also log error details to a log file as follows:
-->

<?php
// Basic error handling using the die() function
function customError($errno, $errstr, $errfile, $errline, $errcontext)
{
    $message = date("Ymd H:i:s - ");
    $message .= "Error: [" . $errno . "], " . "$errstr in $errfile on line $errline, ";
    $message .= "Variables:" . print_r($errcontext, true) . "\r\n";

    error_log($message, 3, "logs/errors.log");
    die("There was a problem, please try again.");
}

function calcDivision($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("calcDivision(): divisor cannot be zero", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}
set_error_handler("customError");
echo calcDivision(10, 0);
