<!DOCTYPE html>
<html>
    <head>
        <title>Predefined Variables</title>
    </head>
    <body>
        <?php
            // References all variables available in global scope
            print_r($GLOBALS);
            print_r($_SERVER['REQUEST_URI']);
            print_r($_GET);
            print_r($_SESSION);
            print_r($_COOKIE);
        ?>
    </body>
</html>