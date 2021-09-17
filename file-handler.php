<?php 

$name = $_POST[name];
$visitor_email = $_POST[email];
$subject = $_POST[subject];
$message = $_POST[message];


$emial_form='info@jharkhanddumka@gmail.com';
$emil_subject = 'New form submission';
$email_body = "User-Name:$name.\n".
              "User-Email:$visitor_email.\n".
              "Subject:$subject.\n".
              "massage:$massage.\n";



              $to = 'sonijite25061996@gmail.com';
              $headers = "Form: $emial_form\r\n";
              $headers.=Reply-To: $visitor_email \r\n;
              mail($to,$email_subject,$email_body,$headers);

              header("location: contect.html"); 


 ?>