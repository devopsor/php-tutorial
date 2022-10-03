<?php

// Delete files using PHP unlink() function
$file =  "newfile.txt" ;
 
//Check if the file exists 
if (file_exists($file)){
     //Try to delete the file 
    if (unlink($file)){
         echo  "The file was deleted successfully." ;
    }  else {
         echo  "Error: Could not delete file." ;
    }
}  else {
     echo  "Error: file does not exist." ;
}