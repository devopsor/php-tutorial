<?php

// r    Open file read-only.
// r+    Open the file for reading and writing.
// w    Opens the file for writing only, and clears the file contents. If the file doesn't exist, PHP will try to create it.
// w+    Open the file for reading and writing, and clear the file contents. If the file doesn't exist, PHP will try to create it.
// a    Append. Open a file for writing only. File contents are preserved by writing to the end of the file. If the file doesn't exist, PHP will try to create it.
// a+    read/append. Open the file for reading and writing. File contents are preserved by writing to the end of the file. If the file doesn't exist, PHP will try to create it.
// x    Open a file for writing only. Returns False and generates an error if the file already exists. If the file doesn't exist, PHP will try to create it.
// x+    Opens the file for reading and writing; otherwise, behaves the same as 'x'.
$file = "data.txt";

//Check if the file exists
if (file_exists($file)) {
    //Read and output the entire file
    $arr = file($file) or die("ERROR: Cannot open the file.");
    foreach ($arr as $line) {
        echo $line;
    }
} else {
    echo "ERROR: File does not exist.";
}

// testfiles testmsg
