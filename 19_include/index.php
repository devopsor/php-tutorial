<!-- You might be thinking, why do we need require() if we can include files using include() statement. In general, require() statements operate like include(). -->

<!-- The only difference is - 
        the include() statement only generates a PHP warning, but allows the script to continue execution if the file to include is not found, 
        while the require() statement will generate a fatal error and stop the script execution. 
-->

<!DOCTYPE html>
<html>
<head>
    <title> Basic Tutorial </title>
</head>

<?php include "header.php";?>
<!-- the include() statement only generates a PHP warning, but allows the script to continue execution if the file to include is not found,  -->
<?php include "func.php";?>
<?php include "menu.php";?>
     <h1> Welcome to our website! </h1>
    <p> Here, You will find a lot of useful information. </p>
<?php include "footer.php";?>

</html>


<!-- header
Warning: include(func.php): failed to open stream: No such file or directory in C:\xampp\htdocs\php_tutorial\19_include\index.php on line 16
Warning: include(): Failed opening 'func.php' for inclusion (include_path='C:\xampp\php\PEAR') in C:\xampp\htdocs\php_tutorial\19_include\index.php on line 16
menu
Welcome to our website!
Here, You will find a lot of useful information.

footer -->