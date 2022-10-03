<?php

// if the "note.txt" file does not exist, PHP will automatically create it and write the data. 
// However, if the "note.txt" file already exists, PHP will erase the contents of this file (if any) before writing the new data, 
// however, if you just want to append the file and keep the existing contents, the above example Please use pattern a instead of w.

$file = "note.txt";
//Data string to write
$data = "The quick brown fox jumps over the lazy dog.";
//Open the file for writing
$handle = fopen($file, "w") or die("ERROR: Cannot open the file.");
//Write data to file
fwrite($handle, $data) or die("ERROR: Cannot write the file.");
//Close the file handle
fclose($handle);


echo "Data successfully written to file.";
echo "<br>";

readfile($file) or die("ERROR: Cannot open the file.");

// Data successfully written to file.