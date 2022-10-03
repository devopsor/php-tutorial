<?php

// if the "note.txt" file does not exist, PHP will automatically create it and write the data.
// However, if the "note.txt" file already exists, PHP will erase the contents of this file (if any) before writing the new data,
// however, if you just want to append the file and keep the existing contents, the above example Please use pattern a instead of w.
$file = "note.txt";
//Data string to write
$data = "The quick brown fox jumps over the lazy dog.";
//Write data to the file
// If the file specified in the file_put_contents() function already exists, PHP will overwrite it by default. 
// file_put_contents($file, $data) or die("ERROR: Cannot write the file.");

// If you want to preserve the contents of the file, you can pass the special FILE_APPEND flag
// as the third parameter to the file_put_contents() function. It will simply append the new data to 
// the file instead of overwriting it.
file_put_contents($file, $data, FILE_APPEND) or die("ERROR: Cannot write the file.");
echo "Data successfully written to file.";
echo "<br>";
readfile($file) or die("ERROR: Cannot open the file.");
echo "<br>";
// Data successfully written to file.
