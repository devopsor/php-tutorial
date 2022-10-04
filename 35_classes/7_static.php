<!--
    Static properties and methods
    In addition to visibility, properties and methods can also be declared static,
    which makes them accessible without an instance of the class. Static properties and methods
    can be accessed using the scope resolution operator (::) as follows: ClassName::$property and ClassName::method().

    Although static methods can be used, properties declared static cannot be accessed through objects of the class,
    as shown in the following example:
-->
<?php
//Class definition
class HelloClass
{
    //Declare static properties
    public static $greeting = "Hello World!";

    //declare static method
    public static function sayHello()
    {
        // The keyword self in the above example means "current category". 
        // It must never start with a dollar sign ($) and always start with the :: operator (eg self::$name).
        echo self::$greeting;
    }
}
// Try to access static properties and methods directly
echo HelloClass::$greeting; // Output: Hello World!
HelloClass::sayHello(); // Output: Hello World!

// Attempt to access static properties and methods via object
$hello = new HelloClass;
echo $hello->greeting; // Strict Warning
$hello->sayHello(); // Output: Hello World!


// The self keyword is different from the this keyword, which means "the current object" or 
// "the current instance of the class". This keyword always starts with a dollar sign ($) 
// followed by a -> operator (eg $this->name).