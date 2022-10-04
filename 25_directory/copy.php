<?php
// Copy files from one location to another
$file = "test/note.txt";
$directory = "backup";
$new = "backup/test.txt";

if(!file_exists($directory)){
    if(mkdir($directory)){
        echo "The direcotry was created successfully.<br>";
        if(copy($file, $new)){
            echo "The file was copied successfully.";
        }else{
            echo "Error: Could not copy file.";
        }
    }else{
        echo "Error: Could not create directory.";
    }
}else{
    echo "Error: Directory already exists.";
}

