<!--
Using constructors and destructors

To simplify object-oriented programming, PHP provides magic methods that are 
automatically executed when certain operations occur in objects.

For example, the magic method __construct() (called the constructor) is automatically executed 
whenever a new object is created. Likewise, the magic method __destruct() (called the destructor) is automatically 
executed when the object is destroyed. 
After the object is destroyed, the destructor will clear all resources allocated to the object.
-->

<?php
class  MyClass
{
    // constructor 
   public  function  __construct () {
        echo  ' class "'  .  __CLASS__  .  '" started<br>' ;
        echo "<br>";
   }
   
   public function output(){
        echo "class output message";
        echo "<br>";
   }
   // destructor 
   public  function  __destruct () {
        echo  'class "'  .  __CLASS__  .  '" destroyed<br>' ;
        echo "<br>";
   }
}

//Create a new object 
$obj =  new  MyClass;
$obj->output();
// Output message 
echo  "End of file reached.";
echo "<br>";


// The execution result is as follows:

// class "MyClass" started

// class output message
// End of file reached.
// class "MyClass" destroyed