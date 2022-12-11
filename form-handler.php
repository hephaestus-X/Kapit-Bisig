<?php
$Fname = $_POST['Fname'];
$Lname = $_POST['Lname'];
$visitor_mail = $_POST['Email'];
    
    
$email_from = 'Kapit-Bisig.com';
    
$email_subject = 'New registered user';
    
$email_body = "User Name: $Fname. $Lname. \n ".
                "User Email: $visitor_email. \n";

    
    
&to = 'enriquezxedric917@gmail.com';


$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor-email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: consumer.html")

?>