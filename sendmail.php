

<?php

$name = $_POST{'name'};
$visitor_email = &_POST['email'];
&message = &_POST['message'];

$email_form = 'My Portfolio Website';

$email_sibject = "New Form Submisison";


$email_body = "User Name: $Name.\n".
            "User Email: $visitor_email.\n";

$to = "damianwojtowicz94@gmail.com";

$headers = "From: $email_from \r\r";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");



?>


