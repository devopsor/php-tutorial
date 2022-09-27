<!DOCTYPE html>
<html>
    <head>
        <title>HelloWorld</title>
    </head>
    <body>
        <?php
            // echo and print are more or less the same. They are both used to output data to the screen.
            echo "<h2>PHP is Fun!</h2>";
            echo "Hello world!<br>";
            echo("Hello world!<br>");
            echo "I'm about to learn PHP!<br>";
            // echo accepts multiple arguments. So you may write echo $a, $b instead of echo $a . $b
            echo "This ", "string ", "was ", "made ", "with multiple parameters.", "<br>";
            echo("This " . "string " . "was " . "made " ."with multiple parameters."."<br>");
            
            print "<h2>PHP is Fun!</h2>";
            print "Hello world!<br>";
            print "I'm about to learn PHP!";

           
            $text = "Learn PHP";
            $x = 5;
            $y = 4;

            print "<h2>" . $text . "</h2>";
            print("<h2>" . $text . "</h2>");
            // echo has no return value 
            // $test = echo $x+$y;          // Parse Error
             // print has a return value of 1 so it can be used in expressions
            print $x + $y;  // 9
            print "<br>";
            $result = print $x + $y;  // 9
            print "<br>";
            print $result;  // 1
            print "<br>";
            print($result); // 1

        ?>
    </body>
</html>