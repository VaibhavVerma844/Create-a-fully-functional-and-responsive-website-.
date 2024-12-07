<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "User Number: $number.\n".
                        "User Message: $message.\n";

$to = 'vermavaibhav452@gmail.com';

$header = "Form: $email_form \r\n";

$header .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");


?>