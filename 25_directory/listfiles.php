<?php
// PHP scandir() function

// List all files in a directory
// You can use the PHP scandir() function to list files and directories within a specified path.

// You can use the PHP scandir() function to list files and directories within a specified path.
// Now, we will create a custom function that will recursively list all files in a directory using PHP.
// This script is helpful if you are working with deeply nested directory structures.
//Define a function to output files in a directory
function outputFiles($path)
{
    //Check if a directory exists
    if (file_exists($path) && is_dir($path)) {
        //Scan for files in this directory
        $result = scandir($path);
        // filter out current (.) and parent directories (..)
        $files = array_diff($result, array('.', '..'));
        if (count($files) > 0) {
            //loop through retuned array
            foreach ($files as $file) {
                if (is_file("$path/$file")) {
                    //display filename
                    echo $file . "<br>";
                } else if (is_dir("$path/$file")) {
                    //If the directory is found, call the function recursively
                    outputFiles("$path/$file");
                }
            }
        } else {
            echo "Error: File not found in directory.";
        }
    } else {
        echo "Error: The directory does not exist.";
    }
}

//call function
outputFiles("D:\Memo");
