<!--
    Control visibility of properties and methods

    When working with a class, you can even use the visibility keyword to restrict access to its properties and methods for finer control.
    There are three visibility keywords (from most visible to least visible): public, protected, private, which determine how and where properties and methods are accessed and modified.
    public
        A public property or method can be accessed from anywhere inside and outside the class.
        This is the default visibility for all class members in PHP.
    protected
        A protected property or method can only be accessed from within the class itself or from a subclass or an inherited class (i.e. a class that extends the class).
    private
        A private property or method can only be accessed from the class in which it is defined. Even subclasses or inherited classes cannot access private properties or methods.
    The following example will show you how this visibility actually works:
-->
<?php
//Class definition
class Automobile
{
    //Declare property
    public $fuel;
    protected $engine;
    private $transmission;
}
class Car extends Automobile
{
    // constructor
    public function __construct()
    {
        echo ' class "' . __CLASS__ . '" started<br>';
    }
}

//Create object from Automobile class
$automobile = new Automobile;

// try to set $automobile object property
$automobile->fuel = 'Petrol'; // ok
// $automobile->engine = '1500 cc'; // fatal error
// $automobile->transmission = 'Manual'; // fatal error

//Create object from Car class
$car = new Car;

// try to set $car object property
$car->fuel = 'Diesel'; // ok
// $car->engine = '2200 cc'; // fatal error
// $car->transmission = 'Automatic'; // undefined