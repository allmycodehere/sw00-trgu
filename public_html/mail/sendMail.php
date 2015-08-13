<?php
require("PHPMailerAutoload.php");

function sendGenericMail($to, $subject, $message, $fromName) {
    $mail = new PHPMailer();
    $mail->SMTPDebug = 1;
    $mail->From = "support@sqftinteriors.com"; // $email;
    $mail->FromName = $fromName;
    $mail->AddAddress($to);
    // set word wrap to 50 characters
    $mail->WordWrap = 50;
    // set email format to HTML
    $mail->IsHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;
    if (!$mail->Send()) {
        return -1;        
    } else {
        return 1;
    }
}
?>