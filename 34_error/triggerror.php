<!--
    ※Trigger error
    Although the PHP engine triggers errors when it encounters problems with the script,
    you can also trigger errors yourself. This can help make your application more robust,
    as it can flag potential problems before they turn into serious bugs.

    To trigger an error from within a script, call the trigger_error() function,
    passing in the error message to generate:
        trigger_error ( "Something went wrong." );
-->

<?php

function calcDivision($dividend, $divisor)
{
    if ($divisor == 0) {
        trigger_error("The divisor cannot be zero", E_USER_WARNING);
        return false;
    } else {
        return ($dividend / $divisor);
    }
}

//call function
echo calcDivision(10, 0);