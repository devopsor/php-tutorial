<?php
    
    echo 'Current PHP version: ' . phpversion();
    echo "<br>";
    
    //This is a single- line comment 
    echo  "Hello, world!<br/>" ;
    #This is also a single-line comment 
    echo  "Hello, world!<br>" ;
    print  'Hello, world!<br>' ;

    print "This string spans\n
    multiple lines. The newlines will be\n
    output as well<br>";

    print nl2br("This string spans\n
            multiple lines. The newlines will be\n
            output as well<br>");

    // The argument can be any expression which produces a string
    $foo = "example";
     // foo is example
    print "foo is $foo";
    echo "<br>";

    $fruits = ["lemon", "orange", "banana"];
    // lemon and orange and banana
    print implode(" and ", $fruits); 
    echo "<br>";
    
    // block comment
    /*
        This is a multi-line comment block.
        It spans more than .
        one line
    */ 
    echo  "Block Comment" ;
    echo "<br>";

    // Case sensitivity in PHP
    $color =  "blue" ;
    // try to print the variable value 
    echo  "the color of the sky is "  . $color .  "<br>" ;
    // echo  "the color of the sky is "  . $Color .  "<br>" ;
    // echo  "the color of the sky is "  . $COLOR .  "<br>" ;

    // However, the names of keywords, functions and classes are not case sensitive.
    // As a result calling gettype() or GETTYPE() produces the same result.
    $color =  "blue" ;
    // Get the type of the variable 
    echo gettype(  $color) .  "<br>" ;
    echo  GETTYPE($color) .  "<br>" ;