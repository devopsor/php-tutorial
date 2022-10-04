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

//Create a new object from the Rectangle class
$obj = new Rectangle;

//Get the object property value
echo $obj->length; // output: 0
echo "<br>";
echo $obj->width; // output: 0
echo "<br>";

//Set the object property value
$obj->length = 30;
$obj->width = 20;
//read object property values ​​again to show changes
echo $obj->length; // output: 30
echo "<br>";
echo $obj->width; // output: 20
echo "<br>";
//call object method
echo $obj->getPerimeter(); // output: 100
echo "<br>";
echo $obj->getArea(); // output: 600
echo "<br>";