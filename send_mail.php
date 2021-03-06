<?php
//Import PHPMailer classes into the global namespace
//use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                               //Enable verbose debug output
    $mail->isSMTP();                                    // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';                      // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                             // Enable SMTP authentication
    $mail->Username = 'luc_vallet@hotmail.com';         // SMTP username
    $mail->Password = 'espoir2016';                     // SMTP password
    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                   // TCP port to connect to

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress('luc.vallet@gmail.com');              // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
  //  $mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}