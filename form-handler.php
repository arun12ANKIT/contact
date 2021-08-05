<?php
$name = $_POST['name'];
$senderemail = $_POST['email'];
$mobile = $_POST['mobile'];
$fedback = $_POST['feedback'];

$email_from ='info@localhost.com';
$email_subject = 'New Form Submisson';
$email_body = "User Name: $name.\n".
              "User Email $senderemail.\n".
              "User Mobile $mobile.\n".
              "User feedback $feedback.\n";
$to = "priyanshupandeyankit02@gmail.com";

$headers = "From: $email_from \r\n";
$headers .="Reply-To: $senderemail \r\n";
 mail($to,$email_subject,$email_body,$headers);
 header("Location:contact us.html" );
?>