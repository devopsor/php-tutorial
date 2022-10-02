
<!--
PHP GET and POST
In this tutorial, you will learn how to use HTTP GET and POST methods to
send information to a server, and how to retrieve information using PHP.
-->

<!DOCTYPE html>
<html >
<head >
    <title> Online example PHP GET method </title>
</head>

<?php
if (isset($_GET["name"])) {
    echo "<p>Hi, " . $_GET["name"] . "</p>";
}
?>
<form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>