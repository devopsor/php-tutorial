<!--
    PHP JSON parsing
    In this tutorial, you will learn how to encode and decode JSON data in PHP.

    What is JSON
    JSON stands for Java Script Object Notation .
    JSON is a standard lightweight data interchange format that can be parsed and generated quickly and easily.

    JSON, like XML, is a text-based format that is easy to write and understandable for both humans and computers,
    but unlike XML, JSON data structures take up less bandwidth than the XML version.
    JSON is based on two basic structures:
        Object: This is defined as a collection of key/value pairs (i.e. key:value).
                    Each object begins with an opening curly brace, { and ends with a closing curly brace}. Multiple key/value pairs are separated by commas, .
        Array: Defined as an ordered list of values.
                    Arrays start with a left bracket and end with a right bracket []. Values ​​are separated by commas, .
 -->

<!--
    In JSON, keys are always strings, and values ​​can be strings , numbers , true or false , null or even object or array .
    Strings must be enclosed in double quotes ("") and can contain escape characters such as \n, \t and \. A JSON object might look like this:
 -->

 <!--
        PHP encoded JSON data
        In PHP, the json_encode() function is used to encode values ​​into JSON format.
         The encoded value can be any PHP data type except resources , such as database or file handles.
         The following example shows how to encode a PHP associative array into a JSON object:
     -->
<?php
//Associative array
$marks = array("Peter" => 65, "Harry" => 80, "John" => 78, "Clark" => 90);
echo json_encode($marks); // {"Peter":65,"Harry":80,"John":78,"Clark":90}
echo "<br>";

//index array
$colors = array("Red", "Green", "Blue", "Orange", "Yellow");
echo json_encode($colors);      //["Red","Green","Blue","Orange","Yellow"]
echo "<br>";

// You can also force the json_encode() function to return the PHP index array as
// a JSON object by using the JSON_FORCE_OBJECT option, as in the following example:
$colors = array("Red", "Green", "Blue", "Orange");
echo json_encode($colors, JSON_FORCE_OBJECT);
// {"0":"Red","1":"Green","2":"Blue","3":"Orange"}
