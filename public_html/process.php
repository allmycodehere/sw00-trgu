<?php

if (isset($_POST['name'])) {

    require_once './mail/sendMail.php';

    $name = ucwords($_POST['name']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $msg = $_POST['comment'];
    $myDate = date("d-m-Y");

    $subject = "Enquire/Feedback Mail from Sqftinteriors.com";
    $message = "Details of Message :- <br><br>";
    $message = $message . "<table border='0'>";
    $message = $message . "<tr width='60%'> <td align='right'> Date &nbsp;</td><td>&nbsp;" . $myDate . "</td>";
    $message = $message . "<tr> <td align='right'> Name &nbsp;</td><td>&nbsp;" . $name . "</td>";
    $message = $message . "<tr> <td align='right'> Email-Id &nbsp;</td><td>&nbsp;" . $email . "</td>";
    $message = $message . "<tr> <td align='right'> Phone No&nbsp;</td><td>&nbsp;" . $phone . "</td>";
    $message = $message . "<tr> <td align='right'> City&nbsp;</td><td>&nbsp;" . $city . "</td>";
    $message = $message . "<tr> <td align='right'> Message&nbsp;</td><td>&nbsp;" . $msg . "</td>";
    $message = $message . "</table>";

    $to = 'hexits.its@gmail.com';

    $res = sendGenericMail($to, $subject, $message, $name);
    
    $result;    
    if ($res == 1) {
        $result = array("status" => TRUE);
    } else {
        $result = array("status" => FALSE);
    }

    echo json_encode($result);
}
?>