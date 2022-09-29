<?php

// Data Types in PHP

// Values ​​assigned to PHP variables can have different data types, including simple string and number types, 
// as well as more complex data types such as arrays and objects.
// PHP supports a total of eight primitive data types: integer, float or float, string, boolean, array, object, resource, and NULL. 
// These data types are used to construct variables. Now, let's discuss each of them in detail.

// PHP Integer

// var_dump- Dumps information about a variable

$a =  123 ;  // decimal number
var_dump($a);             // int(123)
echo  "<br>" ;
 
$b =  -123 ;  // negative number
var_dump($b);             // int(-123)
echo  "<br>" ;
 
$c =  0x1A ;  // hex number
var_dump($c);            // int(26)
echo  "<br>" ;
 
$d =  0123 ;  // octal number
var_dump($d);            // int(83)
echo  "<br>" ;


/* PHP string */
$a =  'Hello world!' ;
echo  $a;                  // Hello world!
echo  "<br>" ;
var_dump($a);         // string(12) "Hello world!"
echo  "<br>" ;

$b =  "Hello world!" ;
echo  $b;                 // Hello world!
echo  "<br>" ;
var_dump($b);        // string(12) "Hello world!"
echo  "<br>" ;

$c =  'Stay here, I\'ll be back.' ;
echo  $c;                 // Stay here, I'll be back.
echo  "<br>" ;
var_dump($c);        // string(24) "Stay here, I'll be back."
echo  "<br>" ;

// PHP float or double
$a =  1.234 ;
var_dump($a);        // float(1.234)
echo  "<br>" ;
 
$b =  10.2e3 ;
var_dump($b);        // float(10200)
echo  "<br>" ;
 
$c =  4E-10 ;
var_dump($c);        // float(4.0E-10)
echo  "<br>" ;

// PHP Boolean
//Assign value true to variable 
$show_error =  true ;
var_dump($show_error);    // bool(true)
echo  "<br>" ;

// PHP arrays
$colors =  array ( "Red" ,  "Green" ,  "Blue" );
var_dump($colors);   // array(3) { [0]=> string(3) "Red" [1]=> string(5) "Green" [2]=> string(4) "Blue" }
echo  "<br>" ;
 
$color_codes =  array (
     "Red"  =>  "#ff0000" ,
     "Green"  =>  "#00ff00" ,
     "Blue"  =>  "#0000ff"
);
var_dump($color_codes);  // array(3) { ["Red"]=> string(7) "#ff0000" ["Green"]=> string(7) "#00ff00" ["Blue"]=> string(7) "#0000ff" }
echo  "<br>" ;


// PHP Object
//class definition 
class  greeting {
    // property 
   public  $str =  "Hello World!" ;
   
   // method 
   function  show_greeting () {
        return  $this ->str;
   }
}

//Create object from class 
$message =  new  greeting;
var_dump($message);  // object(greeting)#1 (1) { ["str"]=> string(12) "Hello World!" }
echo  "<br>" ;

// PHP NULL
$a =  NULL ;
var_dump($a);   // NULL
echo  "<br>" ;
 
$b =  "Hello World!" ;
$b =  NULL ;
var_dump($b);  // NULL
echo  "<br>" ;

// PHP resources

//Open the file for reading 
$handle = fopen( "./node.txt" ,  "r" );
var_dump($handle);   // resource(3) of type (stream)
echo  "<br>" ;
 
//Connect to MySQL database server using default settings 
$link = mysqli_connect( "localhost" ,  "root" ,  "password" );
var_dump($link);
echo  "<br>" ;


// object(mysqli)#2 (18) { ["affected_rows"]=> int(0) ["client_info"]=> string(14) "mysqlnd 7.4.23" ["client_version"]=> int(70423) ["connect_errno"]=> int(0) ["connect_error"]=> NULL ["errno"]=> int(0) ["error"]=> string(0) "" ["error_list"]=> array(0) { } ["field_count"]=> int(0) ["host_info"]=> string(20) "localhost via TCP/IP" ["info"]=> NULL ["insert_id"]=> int(0) ["server_info"]=> string(21) "5.5.5-10.4.21-MariaDB" ["server_version"]=> int(100421) ["sqlstate"]=> string(5) "00000" ["protocol_version"]=> int(10) ["thread_id"]=> int(9) ["warning_count"]=> int(0) }