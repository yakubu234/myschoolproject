<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'C:\xampp\htdocs\www\group 2 (two)\user\src\Exception.php';

/* The main PHPMailer class. */
require 'C:\xampp\htdocs\www\group 2 (two)\user\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'C:\xampp\htdocs\www\group 2 (two)\user\src\SMTP.php';

$mail = new PHPMailer(TRUE);
require 'C:\xampp\htdocs\vendor\autoload.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'securedhms@gmail.com';                 // SMTP username
    $mail->Password = 'OdunFavourAbiola';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;
                                        // TCP port to connect to
    //Recipients
    $mail->setFrom('securedhms@gmail.com', 'Mailer');
    $mail->addAddress('yakubuabiola2003@gmail.com', 'Joe User');     // Add a recipient
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

// 
?>