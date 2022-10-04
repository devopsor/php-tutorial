<!DOCTYPE html> 
<html> 
<head> 
<meta  charset = "UTF-8"> 
<title> Simple Image Gallery </title> 
<style  type = "text/css"> 
    .img-box {
         display : inline- block;
         text-align : center;
         margin :  0 15px ;
    }
</style> 
</head>

<?php 
    //Array containing example image filenames 
    $images =  array ( "kites.png" ,  "balloons.jpg" );
    
    //loop through the array to create the image library 
    foreach ($images as $image){
        echo  '<div class="img-box">' ;
            echo  '<img src="images/'  . $image .  '" width=" 200" alt="'  . pathinfo($image, PATHINFO_FILENAME) . '">' ;
            echo  '<p><a href="download.php?file='  . urlencode($image) .  '">download</p></a></p>' ;
        echo  '</div>' ;
    }
?>
</html>