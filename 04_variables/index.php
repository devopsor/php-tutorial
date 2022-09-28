<?php
    /* Variable assignment */
    
    //declare variable 
    $txt =  "Hello World!" ;
    $number =  10 ;
    //display variable value 
    echo  $txt;   // output: Hello World! 
    echo "<br>";
    echo  $number;  // output: 10 
    echo "<br>";

    /* Variable scope */
    // Local variables
    $x =  4 ;
    function  assignx  ()  { 
       $x =  0 ;
        print  "\$x is $x.<br/>" ;
    }
    assignx();
    print  "\$x is $x.<br />";

    // Function parameters
    // Multiply the value by 10 and return it to the caller 
    function  multiply  ($value)  {
        $value = $value *  10 ;
        return  $value;
    }
    
    $retval = multiply ( 10 );
    echo  "The return value is $retval" ;
    echo "<br>";

    //Static Variables
    function  keep_track ()  {
        static $count = 1;
        $count++;
        print  $count;
        print  "<br />" ;
    }
    keep_track();  // 2
    keep_track();  // 3
    keep_track();  // 4

    // Global Variables
    $somevar = 15;
    function  addit1 ()  {
        global $somevar;
        $somevar++;
        print  "Somevar = $somevar" ;
        print  "<br />" ;
    }
    function  addit2()  {
        global $somevar;
        $somevar--;
        print  "Somevar = $somevar" ;
        print  "<br />" ;
    }
    addit1();  // 16
    addit2();  // 15
    addit1();  // 16

    /* Naming conventions for PHP variables */

    // These are the following rules for naming PHP variables:
    // All variables in PHP start with a $ sign followed by the variable name.
    // Variable names must start with a letter or underscore (_) character.
    // Variable names cannot start with a number.
    // Variable names in PHP can only contain alphanumeric characters and underscores (Az, 0-9, and _).
    // Variable names cannot contain spaces.