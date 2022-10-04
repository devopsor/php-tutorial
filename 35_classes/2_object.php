<!--
    The arrow notation (->) is an OOP construct used to access the contained properties and methods of a given object.
    The pseudo variable $this provides a reference to the calling object (that is, the object to which the method belongs).

    The true power of object-oriented programming is evident when using multiple instances of the same class,
    as shown in the following examples:
-->

<?php

// contains class definition
class Rectangle
{
    // declare property
    public $length = 0;
    public $width = 0;

    //Method for finding the perimeter
    public function getPerimeter()
    {
        return (2 * ($this->length + $this->width));
    }

    //Method for finding area
    public function getArea()
    {
        return ($this->length * $this->width);
    }
}

//Create multiple objects from the Rectangle class
$obj1 = new Rectangle;
$obj2 = new Rectangle;

//call the method of two objects
echo $obj1->getArea(); //output: 0
echo "<br>";
echo $obj2->getArea(); //output: 0
echo "<br>";

//Set the $obj1 property value
$obj1->length = 30;
$obj1->width = 20;
//Set the $obj2 property value
$obj2->length = 35;
$obj2->width = 50;

//call the method of the two objects again
echo $obj1->getArea(); //output: 600
echo "<br>";
echo $obj2->getArea(); //output: 1750
echo "<br>";

echo gettype($obj1);
echo "<br>";
echo gettype($obj2);
echo "<br>";
