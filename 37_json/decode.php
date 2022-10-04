<!--
    Decode JSON data with PHP

    Decoding JSON data is as easy as encoding it.
    You can use the PHP json_decode() function to convert a JSON-encoded string to the appropriate PHP data type.
    The following example demonstrates how to decode or convert a JSON object to a PHP object .
-->
<?php

//Store JSON data in PHP variables
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
var_dump(json_decode($json));
// object(stdClass)#1 (4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }
echo "<br>";

//Store JSON data in PHP variables
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
var_dump(json_decode($json, true)); // decode to array
// array(4) { ["Peter"]=> int(65) ["Harry"]=> int(80) ["John"]=> int(78) ["Clark"]=> int(90) }
echo "<br>";

// Now, let's look at an example that will show you how to decode JSON data and
// access individual elements of a JSON object or array in PHP.
//Assign JSON encoded string to PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';
//decode JSON data to PHP associative array
$arr = json_decode($json, true);
//access value from associative array
echo $arr["Peter"]; //output: 65
echo "<br>";
echo $arr["Harry"]; //output: 80
echo "<br>";
echo $arr["John"]; //output: 78
echo "<br>";
echo $arr["Clark"]; //output: 90
echo "<br>";
//decode JSON data to PHP object
$obj = json_decode($json);
// access value from returned object
echo $obj->Peter; // output: 65
echo "<br>";
echo $obj->Harry; // output: 80
echo "<br>";
echo $obj->John; // output: 78
echo "<br>";
echo $obj->Clark; // output: 90
echo "<br>";

// You can also loop through the decoded data using foreach() like this:
//Assign JSON encoded string to PHP variable
$json = '{"Peter":65,"Harry":80,"John":78,"Clark":90}';

//Decode JSON data to PHP associative array
$arr = json_decode($json, true);
//traverse associative array
foreach ($arr as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

// Peter=>65
// Harry=>80
// John=>78
// Clark=>90

echo "<hr>";
//Decode JSON data to PHP object
$obj = json_decode($json);
//traverse object
foreach ($obj as $key => $value) {
    echo $key . "=>" . $value . "<br>";
}

// Peter=>65
// Harry=>80
// John=>78
// Clark=>90




// Extract values ​​from nested JSON data in PHP

// JSON objects and arrays can also be nested.
// JSON objects can arbitrarily contain other JSON objects, arrays, nested arrays, arrays of JSON objects, etc.
// The following example will show you how to decode a nested JSON object and print all its values ​​in PHP.

//define recursive function to extract nested values
function printValues($arr)
{
    global $count;
    global $values;

    //Check if input is an array
    if (!is_array($arr)) {
        die("Error: input is not an array");
    }

    /*
    Traverse the array, if value itself is an array, call recursively
    The function adds the found value to the array of output items,
    and increment the counter by 1 for each value found
     */
    foreach ($arr as $key => $value) {
        if (is_array($value)) {
            printValues($value);
        } else {
            $values[] = $value;
            $count++;
        }
    }

    // return the total count and values ​​found in the array
    return array('total' => $count, 'values' => $values);
}

//Assign JSON encoded string to PHP variable
$json = '{
   "book": {
       "name": "Harry Potter and the Goblet of Fire",
       "author": "J. K. Rowling",
       "year": 2000,
       "characters": ["Harry Potter", "Hermione Granger", "Ron Weasley"],
       "genre": "Fantasy Fiction",
       "price": {
           "paperback": "$10.40", "hardcover": "$20.32", "kindle": "4.11"
       }
   }
}';
//Decode JSON data to PHP associative array format
$arr = json_decode($json, true);

//call the function and print all values
$result = printValues($arr);
echo "<h3>" . $result["total"] . " value(s) found: </h3>";
echo implode("<br>", $result["values"]);

echo "<hr>";

// print a value
echo $arr["book"]["author"] . "<br>"; // output: J. K. Rowling
echo $arr["book"]["characters"][0] . "<br>"; //output: Harry Potter
echo $arr["book"]["price"]["hardcover"]; //output: $20.32

// The execution results are as follows:

// 10 value(s) found:
// Harry Potter and the Goblet of Fire
// J. K. Rowling
// 2000
// Harry Potter
// Hermione Granger
// Ron Weasley
// Fantasy Fiction
// $10.40
// $20.32
// 4.11

// J. K. Rowling
// Harry Potter
// $20.32
