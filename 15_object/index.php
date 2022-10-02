<?php

// PHP Object Orientation

// In object-oriented programming (English: Object-oriented programming, abbreviation: OOP),
// an object is a whole composed of information and a description of the processing of the information,
// which is an abstraction of the real world.

// There are three main properties of an object:

// The behavior of the object: those operations can be applied to the object, turning on the light,
// turning off the light is the behavior.
// The shape of the object: how the object responds when those methods are applied, color, size, shape.
// Representation of objects: The representation of objects is equivalent to an ID card,
// specifically distinguishing what is different in the same behavior and state.
// For example, Animal (animal) is an abstract class, we can be specific to a dog and a sheep,
// and dogs and sheep are concrete objects, they have color attributes, can write, can run and other behavioral states.
class Site
{
    /* member variables */
    public $url;
    public $title;

    /* Member function */
    public function setUrl($par)
    {
        $this->url = $par;
    }

    public function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    public function setTitle($par)
    {
        $this->title = $par;
    }

    public function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$yahoo = new Site;
$yahoo->setUrl("yahoo.com");
echo $yahoo->getUrl();
echo "<br>";
echo gettype($yahoo);
echo "<br>";

/////////////////////////////////////Online example////////////////////////////////

class Site1
{
    /* member variables */
    private $url;
    private $title;

    /* Member function */
    function setUrl($par)
    {
        $this->url = $par;
    }

    function getUrl()
    {
        echo $this->url . PHP_EOL;
    }

    function setTitle($par)
    {
        $this->title = $par;
    }

    function getTitle()
    {
        echo $this->title . PHP_EOL;
    }
}

$nhooo = new Site1;
$taobao = new Site1;
$google = new Site1;

// Call the member function to set the title and URL
$nhooo->setTitle("Basic Tutorial Network");
$taobao->setTitle("Tmall Mall");
$google->setTitle("Google Search");

$nhooo->setUrl('www.cainiaojc.com');
$taobao->setUrl('www.tmall.com');
$google->setUrl('www.google.com');

// Call member function to get title and URL
$nhooo->getTitle();
echo "<br>";
$taobao->getTitle();
echo "<br>";
$google->getTitle();
echo "<br>";
$nhooo->getUrl();
echo "<br>";
$taobao->getUrl();
echo "<br>";
$google->getUrl();
echo "<br>";

/////////////////////////////////PHP constructor//////////////////////////////////////
class Site2
{

    public function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    public function getSite()
    {
        echo $this->url . $this->title;
    }
}

$site2 = new Site2('www.google.com', '/search');
$site2->getSite();
echo "<br>";
echo "<br>";
////////////////////////////////PHP destructor/////////////////////////////////////////
class DestructableClass
{
    public function __construct()
    {
        print "Constructor<br>";
        $this->name = "DestructableClass";
    }
    public function __destruct()
    {
        echo "<br>";
        print "Destructor " . $this->name . "<br>";
    }
}
$obj = new DestructableClass();
echo "<br>";
echo $obj->name;
echo "<br>";

////////////////////////////////Inherit//////////////////////////////////////////////////////
// child class extends site category
class ChildSite extends Site
{
    public $category;
    public function setCate($par)
    {
        $this->category = $par;
    }

    public function getCate()
    {
        echo $this->category . PHP_EOL;
    }
}
$child = new ChildSite;
$child->setCate("category1");
echo $child->getCate();

/////////////////////////////////////////////Access control//////////////////////////////
// PHP access control of properties or methods is achieved by
// adding the keyword public (public), protected (protected) or private (private) in front.

// public (public): public class members can be accessed anywhere.
// protected (protected): protected class members can be accessed by itself and its subclasses and superclasses.
// private (private): private class members can only be accessed by the class in which they are defined.
class MyClass
{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
    public function printHello()
    {
        echo $this->public;
        echo "<br>";
        echo $this->protected;
        echo "<br>";
        echo $this->private;
        echo "<br>";
    }
}
$obj = new MyClass();
echo $obj->public; // this line can be executed normally
echo "<br>";
// echo $obj->protected; // this line will generate a fatal error
// echo $obj->private; // this line also generates a fatal error
$obj->printHello(); // prints Public, Protected and Private
/**
 *define MyClass2
 */
class MyClass2 extends MyClass
{
    // public and protected can be redefined, but private but not
    protected $protected2 = 'Protected2';
    public function printHello()
    {
        echo $this->public;
        echo "<br>";
        echo $this->protected2;
        echo "<br>";
        // echo $this->private;   // Notice: Undefined property: MyClass2
        echo $this->protected;
        echo "<br>";
    }
}
$obj2 = new MyClass2();
echo $obj2->public; // this line can be executed normally
// echo $obj2->private; // undefined private
// echo $obj2->protected; // this line will generate a fatal Error
$obj2->printHello(); // prints Public, Protected2 and Undefined


// The execution results are 
// yahoo.com
// object
// Basic Tutorial Network
// Tmall Mall
// Google Search
// www.cainiaojc.com
// www.tmall.com
// www.google.com
// www.google.com/search

// Constructor

// DestructableClass
// category1
// Destructor DestructableClass
// Public
// Public
// Protected
// Private
// PublicPublic
// Protected2
// Protected