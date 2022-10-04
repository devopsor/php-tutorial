<!-- 
    PHP mail() function
    Sending email messages is very common for web applications, 
    for example, sending a welcome email when a user creates an account on your website, 
    sending a newsletter to your registered users, or getting user feedback or comments through 
    your website's contact form ,and many more. 
-->

<!-- 
    You can dynamically create and send email messages to one or more recipients in plain text or 
    formatted HTML from a PHP application using the PHP built-in mail() function. 
    The basic syntax of the function can be given by: 
-->

<!-- mail (to, subject, message, headers, parameters) -->

<?php
$to = 'maryjane@mail.com';
$subject = 'Marriage proposal';
$from = 'peterparker@mail.com';

//To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//Create email headers
$headers .= 'From: ' . $from . "\r\n" .
'Reply-To: ' . $from . "\r\n" .
'X-Mailer: PHP/' . phpversion();

//Write a simple HTML email
$message = '<html>';
$message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
$message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
$message .= '</html>';

//Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Your mail has been sent successfully. ';
} else {
    echo 'Unable to send email. please try again. ';
}
