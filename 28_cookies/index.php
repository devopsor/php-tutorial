<?php

// PHP Cookies
// In this tutorial, you will learn how to use PHP cookies to store small amounts of information inside a user's browser.

// What are cookies
// A cookie is a small text file that allows you to store a small amount of data (up to around 4KB) on the user's computer.
// They are often used to track information such as usernames, which the website can retrieve to display a specific
// personalized page the next time the user visits the website.

// Tip: Every time the browser requests a page from the server, all data in the cookie is automatically sent to
// the server within the request.

// Set Cookies
// The setcookie() function is used to set cookies in PHP. Make sure to call the setcookie() function before any output
// generated by the script, otherwise the cookie will not be set. The basic syntax of the function can be given by:

// Name: The name of the cookie.
// Value: The value of the cookie. Since this value is stored on the user's computer, do not store sensitive information.
// Domain: Specify the domain that can be used for its cookies, for example: www.cainiaojc.com.
// Path: Specifies the path on the server where cookies are available. If set to /, the cookie will be available across the domain.
// Expires: Expiration date in UNIX timestamp format. After this time, cookies will become inaccessible. Default value is 0
// Secure: This field, if present, indicates that the cookie is only sent when there is a secure HTTPS connection.

//Set Cookie
// setcookie (name, value, expire, path, domain, secure);

// setcookie( "username" ,  "John Carter" , time()+ 30 * 24 * 60 * 60 );
// setcookie("username", "John Carter", time() + 10);
// setcookie("username", "John Carter", time() + 10, "/test", "www.example.com", false);
// setcookie("username", "John Carter", time() + 10, "/php_tutorial/28_cookies", "localhost", false);
setcookie("username", "John Carter", time() + 3*60, "/php_tutorial/28_cookies", "localhost", true);
// so cookie is related to expire, path, domain

//GET Cookie
//Access a single cookie value
//Verify if cookie is set
echo $_COOKIE["username"];
echo "<br>";

// Before accessing the cookie's value, it's a good idea to check if the cookie has been set.
// For this you can use the PHP isset() function as follows:
if (isset($_COOKIE["username"])) {
    echo "Hi " . $_COOKIE["username"];
} else {
    echo "Welcome Guest!";
}