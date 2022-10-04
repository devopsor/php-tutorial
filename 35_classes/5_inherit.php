<!--
    Extending a class by inheritance

    A class can inherit properties and methods of another class using the extends keyword. 
    The process of extensibility is called inheritance. This is probably the most powerful reason 
    behind using an object-oriented programming model.
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

//Define a new class based on an existing class
class Square extends Rectangle
{
    //Method to test if the rectangle is also a square
    public function isSquare()
    {
        if ($this->length == $this->width) {
            return true; // square
        } else {
            return false; // not square
        }
    }
}

//Create a new object from the Square class
$obj = new Square;

// Set object property value
$obj->length = 20;
$obj->width = 20;

// Call the object method
if ($obj->isSquare()) {
    echo "The area of ​​the square is ";
} else {
    echo "The area of ​​the rectangle is ";
}
echo $obj->getArea();


// The execution result is as follows:

// The area of ​​the square is 400
