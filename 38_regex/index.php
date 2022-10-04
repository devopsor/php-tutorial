<!--
    PHP regular expressions
    In this tutorial, you will learn how regular expressions work and
    how to use them to perform pattern matching in PHP in an efficient manner.
-->

<!--
    preg_match():Perform regular expression matching.
    preg_match_all():Perform global regular expression matching.
    preg_replace():Perform a regular expression search and replace.
    preg_grep():Returns the elements of the input array that match the pattern.
    preg_split():Split a string into substrings using regular expressions.
    preg_quote():Quotes the regular expression characters found in the string.
-->

<?php

// [abc]:Match any of the characters a, b or c.
// [^abc]:Match any character except a, b, c.
// [az]:Matches any character from lowercase a to lowercase z.
// [AZ]:Matches any character from uppercase A to uppercase Z.
// [aZ]:Matches any character from lowercase a to uppercase Z.
// [0-9]:Match a number between 0 and 9.
// [a-z0-9]:Matches a single character between a and z or between 0 and 9.

$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if (preg_match($pattern, $text)) {
    echo "Match found!";
} else {
    echo "Match not found.";
}
echo "<br>";

// Likewise, you can use the preg_match_all() function to find all matches in a string:
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
echo "<br>";

// Predefined character classes
// Some character classes (such as numbers, letters, and spaces) are used
// so frequently that they all have shortcut names.
// The following table lists those predefined character classes:

// .:Matches any single character except newline \n.
// \d:matches any numeric character. Same as [0-9].
// \D:matches any non-numeric character. same as [^0-9]
// \s:Match any whitespace character (space, tab, newline or carriage return). Same as [\t\n\r].
// \S:Matches any non-whitespace character. same as [^\t\n\r]
// \w:Matches any word character (defined as a to z, A to Z, 0 to 9 and underscore). same as [a-zA-Z_0-9]
// \W:matches any non-word character. same as [^a-Za-Z_0-9]

$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
//replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text); // Earth-revolves-around-the-Sun
echo "<br>";
//replace spaces only
echo str_replace(" ", "-", $text); // Earth-revolves-around the Sun
echo "<br>";

// Repeating quantifier
// In the previous section, we learned how to match a single character in multiple ways.
// But what if you want to match multiple characters? For example, say you want to find words that
// contain one or more instances of the letter p, or words that contain at least two p's, and so on.
// This is where quantifiers come into play. Using quantifiers, you can specify how many times a character
// in a regular expression should match.

// The following table lists the various ways to quantify specific patterns:
// p+:Match one or more of the letter p.
// p*:Match zero or more occurrences of the letter p.
// p?:Match zero or one occurrence of the letter p.
// p{2}:Matches exactly two letters p.
// p{2,3}:Matches at least two occurrences of the letter p, but no more than three occurrences of the letter p.
// p{2,}:Match two or more occurrences of the letter p.
// p{,3}:matches up to three occurrences of the letter p
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);

//loop through the $parts array and display the substring
foreach ($parts as $part) {
    echo $part . "<br>";
}

// My
// favourite
// colors
// are
// red
// green
// and
// blue

// Location anchor
// In some cases, you want to match at the beginning or end of a line, word, or string.
// To do this, you can use anchor points. Two common anchors are the caret (^), which indicates
// the start of a string, and the dollar sign ($), which indicates the end of the string.

// ^p:Matches the letter p at the beginning of the line.
// p$:Matches the letter p at the end of the line.

// In the following example, the regular expression will only display names starting with
// the letter "J" in the names array using the PHP preg_grep() function:
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);

// Loop through the $matches array and display the matching names
foreach ($matches as $match) {
    echo $match . "<br>";
}

// Jhon Carter
// John Rambo

// Pattern modifier
// Pattern modifiers allow you to specify how pattern matching is handled.
// Pattern modifiers are placed directly after the regular expression, for example,
// if you want to search for a pattern in a case-insensitive manner, you can use the i modifier,
// like this: /pattern/i. The following table lists some of the most commonly used pattern modifiers.

// i:Make matching case-insensitive.
// m:Change the behavior of ^ and $ to match newline boundaries
//    (that is, the start or end of each line in a multiline string), rather than string boundaries.
// g:Perform a global match, i.e. find all matches.
// o:Evaluate the expression only once.
// s:Change the behavior of . (dot) to match all characters, including newlines.
// x:Allows you to use spaces and comments in regular expressions for clarity.

$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."; // 2 matches were found.
echo "<br>";

// Likewise, the following example shows how to use the ^ anchor and m modifier to
// match at the beginning of each line of a multiline string with the PHP preg_match_all() function
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found."; // 2 matches were found.
echo "<br>";

// Word boundary
// The word boundary character (\b) helps you search for words that begin and/or end with a pattern.
// For example, the regular expression /\bcar/ matches words starting with the pattern car,
// and matches cart, carrot, or cartoon, but not oscar.

// Likewise, the regular expression /car\b/ matches words ending in the pattern car and matches scar,
// oscar, or supercar, but not cart. Likewise, /\bcar\b/ matches words beginning and ending with the word car,
// and only the word car.
// The following example will highlight words starting with car in bold:
$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
// Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.
