<?php

// Force download with PHP

// You can use the PHP readfile() function to force an image or other type of file to
// be downloaded directly to the user's hard drive. Here, we'll create a simple image library that
// allows users to download image files from their browser with a single mouse click.

if (isset($_REQUEST["file"])) {
    //get parameter
    $file = urldecode($_REQUEST["file"]); //decode URL encoded string
    $filepath = "images/" . $file;
    // Process download
    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); //flush the system output buffer
        readfile($filepath);
        die();
    } else {
        http_response_code(404);
        die();
    }
}
