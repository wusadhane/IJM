<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


$EmailTo = "peterkaspe@intijasamandiri.com";
$Title = "New Message Received";

// prepare email body text
$Fields .= "Name: ";
$Fields .= $name;
$Fields .= "\n";

$Fields .= "Email: ";
$Fields .= $email;
$Fields .= "\n";


$Fields .= "Message: ";
$Fields .= $message;
$Fields .= "\n";


// send email
$success = mail($EmailTo,  $Title,  $Fields, "From:" . $email);
