<!--
    Using constructors and destructors

    The destructor is automatically called when the script ends. 
    However, to trigger the destructor explicitly, the object can be destroyed using the PHP unset() function, like this:
-->
<?php
class MyClass
{
    // constructor
    public function __construct()
    {
        echo ' class "' . __CLASS__ . '" started<br>';
    }
    // destructor
    public function __destruct()
    {
        echo 'class "' . __CLASS__ . '" destroyed<br>';
    }
}

//Create a new object
$obj = new MyClass;
// destroy the object
unset($obj);
// Output message
echo "End of file reached.";




// The execution result is as follows:

// class "MyClass" started
// class "MyClass" destroyed
// End of file reached.