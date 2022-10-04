<?php
//Function to filter user input
function filterName($field)
{
    //Clean up username
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);

    //Validate username
    if (filter_var($field, FILTER_VALIDATE_REGEXP, array("options" => array("regexp" => "/^[a-zA-Z\s]+$/")))) {
        return $field;
    } else {
        return false;
    }
}
function filterEmail($field)
{
    //clean up email addresses
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL);

    //validate email address
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return false;
    }
}
function filterString($field)
{
    //clean up the string
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
    if (!empty($field)) {
        return $field;
    } else {
        return false;
    }
}

//Define variable and initialize with null
$nameErr = $emailErr = $messageErr = "";
$name = $email = $subject = $message = "";

//Process form data when submitting form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verify username
    if (empty($_POST["name"])) {
        $nameErr = "Please enter your name.";
    } else {
        $name = filterName($_POST["name"]);
        if ($name == false) {
            $nameErr = "Please enter a valid name.";
        }
    }

    //validate email address
    if (empty($_POST["email"])) {
        $emailErr = "Please enter your email address.";
    } else {
        $email = filterEmail($_POST["email"]);
        if ($email == false) {
            $emailErr = "Please enter a valid email address.";
        }
    }

    //Validate message subject
    if (empty($_POST["subject"])) {
        $subject = "";
    } else {
        $subject = filterString($_POST["subject"]);
    }

    //validate user comments
    if (empty($_POST["message"])) {
        $messageErr = "Please enter your comment.";
    } else {
        $message = filterString($_POST["message"]);
        if ($message == false) {
            $messageErr = "Please enter a valid comment.";
        }
    }

    //Check for typos before sending email
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        //Recipient email address
        $to = 'webmaster@example.com';

        //Create email headers
        $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        //Sending email
        if (mail($to, $subject, $message, $headers)) {
            echo '<p class="success">Your message has been sent successfully!</p>';
        } else {
            echo '<p class="error">Unable to send email. Please try again!</p>';
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Contact Form </title>
        <style type="text/css">
            .error {
                color: red;
            }
            .success {
                color: green;
            }
        </style>
    </head>
    <h2> Contact Us </h2>
    <p> Please complete this form and send it to us </p>
    <form action="contact.php" method="post">
        <p>
            <label for="inputName "> Name: <sup> * </sup> </label>
            <input type="text" name="name" id="inputName" value="<?php echo $name; ?>">
            <span class="error">
                <?php echo $nameErr; ?>
            </span>
        </p>
        <p>
            <label for=" inputEmail"> Email: <sup> * </sup> </label>
            <input type="text" name="email" id="inputEmail" value="<?php echo $email; ?>">
            <span class="error">
                <?php echo $emailErr; ?>
            </span>
        </p>
        <p>
            <label for=" inputSubject"> Subject: </label>
            <input type="text" name="subject" id="inputSubject" value="<?php echo $subject; ?>">
        </p>
        <p>
            <label for="inputComment"> Message: <sup> * </sup> </label>
            <textarea name="message" id="inputComment" rows="5" cols="30 "> <?php echo $message; ?> </textarea>
            <span class="error">
                <?php echo $messageErr; ?>
            </span>
        </p>
        <input type="submit" value="send">
        <input type="reset" value="reset">
    </form>
</html>
