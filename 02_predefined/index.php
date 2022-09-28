<!DOCTYPE html>
<html>
    <head>
        <title>Predefined Variables</title>
    </head>
    <body>
        <?php
            $a = 1;
            // References all variables available in global scope
            print_r($GLOBALS);
            print_r($_SERVER['REQUEST_URI']);
            print_r($_GET);
        ?>
    </body>
</html>