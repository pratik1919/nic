<?php
/**
 * Created by PhpStorm.
 * User: Pratik Budhathoki
 * Date: 6/25/16
 * Time: 1:08 PM
 */

session_start();
include('../config/dbConnect.php');

if(isset($_POST['name'])){

    $name = strip_tags(ucwords($_POST['name']));
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

//        $admin_email = "pratik.budhathoki@gmail.com";

        require_once('../PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
// enable SMTP authentication
        $mail->SMTPAuth = true;
//$mail->SMTPDebug = 1;
// GMAIL username
        $mail->Username = "info.nicNepalsite@gmail.com";
// GMAIL password
        $mail->Password = "NICmailPassword";
        $mail->SMTPSecure = "ssl";
// sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->FromName='NIC';
        $mail->AddAddress("nicnepal.mahabir@gmail.com");
        $mail->Subject  =  'Contact Us Email';
        $mail->IsHTML(true);
        $mail->Body    = 'Hello! NIC,<br><br> '.$name.' wants to contact NIC. <br><br>His email: '.$email.' <br><br>Says:<br> '.$message.' <br><br>Best Wishes,<br>NIC';

        if($mail->Send())
        {
            $_SESSION['emailMessage']='Contact email has been send';
            $_SESSION['messageType']='information';

            header("Location:../view/contact.php");
        }
        else
        {
            $_SESSION['emailMessage']="Mail not sent! Check internet connection.";
            $_SESSION['messageType']='warning';
            header("Location:../view/contact.php");
        }


}