<?php

// PHP Switch…Case Statement

// The switch-case statement is an alternative to the if-elseif-else statement, which does almost the same thing. 
// A switch-case statement tests a variable against a range of values ​​until a match is found, 
// then executes the block of code corresponding to that match.

$today = date("D");

switch ($today) {
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Go to the doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Fix your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Time for a movie.";
        break;
    case "Sun":
        echo "Today is Sunday. Take a break.";
        break;
    default:
        echo "No information available today.";
        break;
}
