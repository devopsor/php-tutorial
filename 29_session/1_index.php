<!-- PHP Session -->
<!-- In this tutorial, you will learn how to temporarily store some data on the server using a PHP session. -->

<!-- What is Session
Although you can use cookies to store data, there are some security issues with it.
Because cookies are stored on the user's computer, an attacker can easily modify the cookie content to
insert potentially harmful data into your application, potentially disrupting your application. -->

<!-- Also, every time the browser requests a URL from the server, all cookie data for the website is automatically
sent to the server in the request.
This means that if you store 5 cookies on the user's system, each 4KB in size, the browser needs to upload
20KB of data each time the user views the page, which may affect the performance of your site. -->

<!-- You can solve both of these problems by using PHP sessions. A PHP session stores data on the server
rather than the user's computer. In a session-based environment, each user is identified by a unique number
called a session identifier or SID. This unique session ID is used to link each user with their own information
on the server (e.g. emails, posts, etc.). -->

<!-- Tip: The session ID is randomly generated by the PHP engine and is almost impossible to guess.
Also, since session data is stored on the server, it doesn't have to be sent with every browser request. -->

<?php
// Start Session

// A Session must first be started before any information can be stored in session variables.
// To start a new session, just call the PHP session_start() function.
// It will create a new session and generate a unique Session ID for the user.

//Start session
session_start();

// The session_start() function first checks if the session already exists by looking for the existence of the session ID.
// If a session is found, i.e. the session is already started, the session variable is set, if not, a new session is started by
// creating a new session ID.

// Note: You must call the session_start() function at the beginning of the page (i.e. before any output generated by
// the script in the browser), just like when setting cookies with the setcookie() function.

// Store and access session data
// You can store all session data as key-value pairs in the $_SESSION[] superglobal array.
// Stored data can be accessed for the lifetime of the session. Take a look at the following script,
// which creates a new session and registers two session variables.
//Store session data
$_SESSION["firstname"] = "Peter";
$_SESSION["lastname"] = "Parker";

$_SESSION["address"] = "NewYork";
$_SESSION["phone"] = "12345678";


// To access the session data we set in the previous example from any other page on the same web domain,
// simply call session_start() to recreate the session, then pass the corresponding key to the $_SESSION associative array.

//Access session data
echo 'Hi, ' . $_SESSION["firstname"] . ' ' . $_SESSION["lastname"];
echo "<br>";
echo 'Hi, ' . $_SESSION["address"] . ' ' . $_SESSION["phone"];

// Hi, Peter Parker
// Hi, NewYork 12345678