<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$message = $_POST['message'];

$email_from = 'PREMA MATRIC HR SEC SCHOOL'

$email_subject = 'New for submission'

$email_body = "User Name : $name.\n".
              "User Email : $visitor_email.\n".
              "Phone Number : $phonenumber.\n".
              "User Message : $message.\n";


$to = 'private.ruban@gmail.com'

$headers = "From : $email_from \r\n";

$headers .= "Reply=To : $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location : contact.html ");




?>