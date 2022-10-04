<!--
    Capture form data with PHP
    To access the value of a specific form field, the following superglobal variables can be used.
    These variables are available in all scopes of the script.
-->

<!--
    $_GET: Contains a list of all field names and values ​​sent by the form using the get method (i.e. via URL parameters).
    $_POST: Contains a list of all field names and values ​​sent by the form using the post method (data not visible in the URL).
    $_REQUEST: Contains the values ​​of the $_GET and $_POST variables and the value of the $_COOKIE superglobal.
-->

<!DOCTYPE html>
<html>
<head>
    <meta  charset = "UTF-8">
    <title> Contact Form </title>
</head>
    <h1> Thanks </h1>
    <p> This is your submission: </p>
    <ol>
        <li> <em> Name: </em>  <?php echo $_POST["name"] ?> </li>
        <li> <em> Email: </em>  <?php echo $_POST["email"] ?> </li>
        <li> <em> Subject: </em>  <?php echo $_POST["subject"] ?> </li>
        <li> <em> Message: </em>  <?php echo $_POST["message"] ?> </li>
    </ol>
</html>
