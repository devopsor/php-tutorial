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

///////////////////////////////////////////////////////interface///////////////////////////////////////////
// declare an 'iTemplate' interface
interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}
// Implement the interface
class Template implements iTemplate
{
    private $vars = array();

    public function setVariable($name, $var)
    {
        $this->vars[$name] = $var;
    }

    public function getHtml($template)
    {
        foreach ($this->vars as $name => $value) {
            $template = str_replace('{' . $name . '}', $value, $template);
        }

        return $template;
    }
}

///////////////////////////////////////////////////////Constant///////////////////////////////////////////
class MyClass3
{
    const constant = 'constant value';
    public function showConstant()
    {
        echo self::constant . PHP_EOL;
    }
}
echo MyClass3::constant . PHP_EOL; // constant value
echo "<br>";
$classname = "MyClass3";
echo $classname::constant . PHP_EOL; // constant value
echo "<br>";
$class = new MyClass3();
$class->showConstant(); // constant value
echo "<br>";
echo $class::constant . PHP_EOL; // constant value

///////////////////////////////////////////////Abstract Class/////////////////////////////////////////
abstract class AbstractClass
{
    // Force subclasses to define these methods
    abstract protected function getValue();
    abstract protected function prefixValue($prefix);
    // normal method (non-abstract method)
    public function printOut()
    {
        print $this->getValue() . PHP_EOL;
    }
}
class ConcreteClass1 extends AbstractClass
{
    protected function getValue()
    {
        return "ConcreteClass1";
    }
    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass1";
    }
}
class ConcreteClass2 extends AbstractClass
{
    public function getValue()
    {
        return "ConcreteClass2";
    }
    public function prefixValue($prefix)
    {
        return "{$prefix}ConcreteClass2";
    }
}
echo "<br>";
$class1 = new ConcreteClass1;
$class1->printOut(); // ConcreteClass1
echo "<br>";

echo $class1->prefixValue('FOO_') . PHP_EOL; //FOO_ConcreteClass1
echo "<br>";

$class2 = new ConcreteClass2;
$class2->printOut(); //ConcreteClass2
echo "<br>";

echo $class2->prefixValue('FOO_') . PHP_EOL; //FOO_ConcreteClass2
echo "<br>";

abstract class AbstractClass2
{
    // Our abstract method only needs to define the required parameters
    abstract protected function prefixName($name);
}
class ConcreteClass3 extends AbstractClass2
{
    // Our subclass can define optional parameters not present in the superclass signature
    public function prefixName($name, $separator = ".")
    {
        if ($name == "Pacman") {
            $prefix = "Mr";
        } elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}
$class = new ConcreteClass3;
echo $class->prefixName("Pacman"), "<br>"; //Mr. Pacman
echo $class->prefixName("Pacwoman"), "<br>"; //Mrs. Pacman

//////////////////////////////////////////////////////////Static keyword/////////////////////////////////////////
// By declaring a class property or method as static, it can be accessed directly without instantiating the class.
// Static properties cannot be accessed through an instantiated object of a class (but static methods can).

class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}
print Foo::$my_static . PHP_EOL; //foo
echo "<br>";
$foo = new Foo();
print $foo->staticValue() . PHP_EOL; //foo
echo "<br>";

////////////////////////////////////////////////////Final keyword//////////////////////////////////////////////////
// PHP 5 added a final keyword. If a method in the parent class is declared final,
// the child class cannot override the method.

class BaseClass
{
    public function test()
    {
        echo "BaseClass::test() called" . PHP_EOL;
    }

    final public function moreTesting()
    { //the child class cannot override the method.
        echo "BaseClass::moreTesting() called" . PHP_EOL;
    }
}
class ChildClass extends BaseClass
{
    public function moreTesting1()
    {
        echo "ChildClass::moreTesting() called" . PHP_EOL;
    }
}
echo "<br>";
$childclass = new ChildClass;
$childclass->moreTesting1(); //ChildClass::moreTesting() called
print "<br>";
print "<br>";
//////////////////////////////////////////////Call the parent class constructor/////////////////////////////////////////////////
// PHP does not automatically call the superclass's constructor in the subclass's constructor.
// To execute the constructor of the parent class, you need to call parent::__construct()
// in the constructor of the child class .

class BaseClass1
{
    public function __construct()
    {
        print "Constructor in the BaseClass class" . PHP_EOL;
        print "<br>";
    }
}
class SubClass1 extends BaseClass1
{
    public function __construct()
    {
        parent::__construct(); // Subclass constructor cannot automatically call parent class constructor
        print "Constructor in SubClass class" . PHP_EOL;
        print "<br>";
    }
}
class OtherSubClass1 extends BaseClass1
{
    // Inherit the constructor of BaseClass
}
// Call BaseClass constructor
$obj = new BaseClass1();
// Call BaseClass, SubClass constructor
$obj = new SubClass1();
// Call BaseClass constructor
$obj = new OtherSubClass1();
// Constructor in the BaseClass class
// Constructor in the BaseClass class
// Constructor in SubClass class
// Constructor in the BaseClass class


// The execution results are as follows:

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
// constant value
// constant value
// constant value
// constant value
// ConcreteClass1
// FOO_ConcreteClass1
// ConcreteClass2
// FOO_ConcreteClass2
// Mr. Pacman
// Mrs. Pacwoman
// foo
// foo

// ChildClass::moreTesting() called

// Constructor in the BaseClass class
// Constructor in the BaseClass class
// Constructor in SubClass class
// Constructor in the BaseClass class