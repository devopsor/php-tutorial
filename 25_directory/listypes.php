<?php
// List all files of a certain type
//  The glob() function

// When working with directory and file structures, there may be times when you need to
// find certain types of files in a directory, such as listing only files .text or .png files, etc.
// You can easily do this with the PHP glob() function, which matches files based on a pattern.

// The glob() function can also be used to find all files in a directory or its subdirectories.
// The function defined in the example below will recursively list all files in a directory,
// just as we did in the example above with the scandir() function.
//Define function to output files in directory
function outputFiles($path)
{
    //Check if directory exists
    if (file_exists($path) && is_dir($path)) {
        //Search for files in that directory
        $files = glob($path . "/*");
        //    $files = glob($path . "/*.txt" );
        if (count($files) > 0) {
            // loop through the resized array
            foreach ($files as $file) {
                if (is_file("$file")) {
                    //Only display the filename
                    echo basename($file) . "<br>";
                } else if (is_dir("$file")) {
                    //If the directory is found, call the function recursively
                    outputFiles("$file");
                }
            }
        } else {
            echo "Error: No such file found in directory.";
        }
    } else {
        echo "Error: The directory does not exist.";
    }
}

//call function
outputFiles("D:\Memo");
