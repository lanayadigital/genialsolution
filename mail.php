<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "mahendra708@mail.com";
$subject = "Enquiry Generate from Website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: info@genialsolution.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Thanks for Contact Us. We will Connect you shortly");
?>