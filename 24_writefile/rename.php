<?php

// Rename files with PHP rename() function

$file = "file.txt";

//Check if the file exists
if (file_exists($file)) {
    //Attempt to rename the file
    if (rename($file, "newfile.txt")) {
        echo "The file was renamed successfully.";
    } else {
        echo "Error: Could not rename file.";
    }
} else {
    echo "Error: file does not exist.";
}
