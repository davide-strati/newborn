<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$firm = htmlspecialchars($_POST["firm"]);
$message = htmlspecialchars($_POST["message"]);

$EmailTo = "strati.davide@gmail.com, jokingmind@gmail.com, ";
$Subject = "Comunicazione dalla Landing Page China";
$senderSubject = "Your message to Mazzoni was coorectly sent."

// prepare email body text
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";

$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";

$Body .= "Ditta: ";
$Body .= $firm;
$Body .= "\n";

$Body .= "Indirizzi a cui invio: ";
$Body .= $emailTo;
$Body .= "\n";

$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
mail($email, $senderSubject, $Body, "From: chinadexk@e-mazzoni.it" );

// redirect to success page
if ($success){
   echo "success";
}else{
    echo "invalid";
}

?>