<?php
    include('Mail.php');
     
    $from = "Mr Hadapsar <hadapsar.homes@gmail.com>";
    $to =  "Mrs abdullah <abdullah0096@yahoo.com>";
    $subject = "What's up";
    $body = "Hi,\n\nHow are you? What is happening";
     
    $headers = array (
        'From' => $from,
        'To' => $to,
        'Subject' => $subject);
     
     $smtp = Mail::factory('smtp');
     
     $mail = $smtp->send($to, $headers, $body);
     
     if (PEAR::isError($mail)) {
       echo("<p>" . $mail->getMessage() . "</p>");
      } else {
       echo("<p>Message successfully sent!</p>");
      }  
?>