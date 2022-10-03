<?php
// If you accidentally use include or require statements in your code to include the same file (usually a function or class file) multiple times,
// conflicts can result. To prevent this, PHP provides include_once and require_once statements.
// These statements behave in the same way as include and require statements, with one exception:
// the include_once and require_once statements will only include the file once, even if the file is included again,
// that is, if the specified file was already included in the previous statement, the file will not be included again.
// To better understand how it works, let's look at an example. Suppose we have a "my_functions.php" file with the following code:

//include file
include_once "function.php";
include_once "fuction1.php";

// call function
multiplySelf(2); // output: 4
echo "<br>";

//include the file again
include_once "function.php";
// call the function
multiplySelf(5); // Doesn't execute


// Warning: include_once(fuction1.php): failed to open stream: No such file or directory in C:\xampp\htdocs\php_tutorial\21_include_once\index.php on line 11
// Warning: include_once(): Failed opening 'fuction1.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\php_tutorial\21_include_once\index.php on line 11
// 4
// 25