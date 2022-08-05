<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];
$to = "emailhere";
$subject = "Mail from Website";

$headers = "From: ".$name. "\r\n" .

$txt = "You have received an e-mail from ".$name ."\r\nEmail: " .$email ."\r\n
    Message: ". $message;

if($email!=NULL){
    mail($to, $subject, $txt, $headers);
}
header('Location:thankyou.html');

?>