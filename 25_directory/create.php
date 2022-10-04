<?php
// PHP parsing directory
// In this tutorial, you will learn how to work with directories or folders using PHP.

$directory = "test";

if(!file_exists($directory)){
    if(mkdir($directory)){
        echo "The direcotry was created successfully.";
    }else{
        echo "Error: Could not create directory.";
    }
}else{
    echo "Error: Directory already exists.";
}