<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$phone_no = $_POST['Phone'];
$subject = $_POST['subject'];

$email_from ='info@CSE.com';

$email_subject = 'New form submission';
$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Phone Number: $phone_no.\n".
              "Subject : $subject.\n";

$to = 'shrivastavaalakh26@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.htnl");
?>