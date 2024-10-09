<?php
// Configuration
$to = 'atandawasiu13@gmail.com';
$subject = 'Request Submission';

// Get Form Data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Create email body
$email_content ="Name:$name<br>Email:$email<br><br>Message:<br>$message";

//Send email
if(mail($to,&$subject,$email_content,$headers)){
    echo"<p>Your Message Has Been Sent Succefully.</p>";}
    else{
        echo"<h2>Oops!</h2>"; echo"<p>We're Sorrry, But Something Went Wrong. Please Try Again Later.</p>";}?>