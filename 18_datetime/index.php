<?php

// PHP Date Function

// Format date and time in PHP
// The format parameter of the date() function is actually a string that can contain multiple characters,
// which allows you to generate a date string that contains various components of the date and time,
// such as day of the week, am or pm, etc. The following are some date-related formatting characters
// commonly used in format strings:

// d - Indicates the day of the month; leading zero two digits (01 or 31)
// D - indicates the abbreviated day of the week (Monday to Sunday)
// m - the month, a number with leading zeros (01 or 12)
// M - for month abbreviation (Jan to Dec)
// y - year as two digits (08 or 14)
// Y - Four digit year (2008 or 2014)

$today = date("d/m/Y");
echo $today; //02/10/2022
echo "<br>";
echo date("d/m/Y") . "<br>"; //02/10/2022
echo "<br>";
echo date("dmY") . "<br>"; //02102022
echo "<br>";
echo date("dmY"); //02102022
echo "<br>";

//Likewise, you can use the following characters to format time strings:
// h - the hour in 12-hour format, with leading zeros (01 to 12)
// H - the hour in 24-hour format with leading zeros (00 to 23)
// i - indicates the minute, leading zeros (00 to 59)
// s - Indicates seconds, leading zeros (00 to 59)
// a - for lowercase am and pm (am or pm)
// A - for uppercase am and pm (am or pm)
// The PHP code in the following example displays dates in different formats:

echo date("H:i:s") . "<br>"; // 15:32:45
echo "<br>";
echo date("F d, Y h:i:s A") . "<br>"; // October 02, 2022 03:32:45 PM
echo "<br>";
echo date("h: i a"); // 03: 32 pm
echo "<br>";

///////////////////////////////////////////// PHP time() function

$timestamp = time();
echo ($timestamp); // 1664717667
echo "<br>";

// By passing a timestamp to the date() function introduced earlier, we can convert it to a human-readable date.
$timestamp = time();
echo (date("Ymd H:i:s", $timestamp)); // 20221002 15:35:32
echo "<br>";

//////////////////////////////////////////PHP mktime() function
// The mktime() function is used to create a timestamp based on a specific date and time.
// If no date and time are provided, a timestamp of the current date and time is returned.
// mktime (hour, minute, second, month, day, year)
echo mktime(15, 20, 12, 5, 10, 2014); // 1399728012
echo "<br>";
echo date('l', mktime(0, 0, 0, 4, 1, 2014)); // Tuesday
echo "<br>";

$futureDate = mktime(0, 0, 0, date("m") + 30, date("d"), date("Y"));
echo date("d/m/Y", $futureDate);  // 02/04/2025

