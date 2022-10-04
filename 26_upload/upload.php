<?php

// Below is the complete code for our "upload.php" file. It will permanently store uploaded files in the "upload" folder and 
// perform some basic security checks like file type and file size to ensure the user uploads the correct file type and within the allowed limits.

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the file was uploaded successfully
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - max 5MB
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) {
            die("Error: file size is larger than allowed limit.");
        }

        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            if (file_exists("images/" . $filename)) {
                echo $filename . " is already exists.";
            } else {
                move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $filename);
                echo "Your file has been uploaded successfully.";
            }
        } else {
            echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else {
        echo "Error: " . $_FILES["photo"]["error"];
    }
}
