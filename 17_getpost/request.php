<!--
    PHP provides another superglobal variable $_REQUEST that
    contains the values ​​of the $_GET and $_POST variables and the value of the $_COOKIE superglobal.
-->

<!DOCTYPE html>
<html>
<head>
    <title> Online example PHP POST method </title>
</head >

<?php
if (isset($_REQUEST["name"])) {
    echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>