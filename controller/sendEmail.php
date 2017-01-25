<?php
/**
 * Created by PhpStorm.
 * User: Pratik Budhathoki
 * Date: 6/25/16
 * Time: 1:08 PM
 */


include('../config/dbConnect.php');

if(isset($_POST['name'])){

    $name = strip_tags(ucwords($_POST['name']));
    $email = strip_tags($_POST['email']);
    $message = strip_tags($_POST['message']);

        $admin_email = "pratik.budhathoki@gmail.com";

        require_once('../PHPMailer-master/PHPMailerAutoload.php');
        $mail = new PHPMailer();
        $mail->CharSet =  "utf-8";
        $mail->IsSMTP();
// enable SMTP authentication
        $mail->SMTPAuth = true;
//$mail->SMTPDebug = 1;
// GMAIL username
        $mail->Username = "pratik.budhathoki@deerwalk.edu.np";
// GMAIL password
        $mail->Password = "pratima19";
        $mail->SMTPSecure = "ssl";
// sets GMAIL as the SMTP server
        $mail->Host = "smtp.gmail.com";
// set the SMTP port for the GMAIL server
        $mail->Port = "465";
        $mail->From = $admin_email;
        $mail->FromName='NIC';
        $mail->AddAddress("pratik.budhathoki@deerwalk.edu.np");
        $mail->Subject  =  'Contact Us Email';
        $mail->IsHTML(true);
        $mail->Body    = 'Hello! '.$name.' wants to contact NIC. <br><br>His email: '.$email.' <br><br>Says: '.$message.' <br><br>Best Wishes,<br>NIC';

        if($mail->Send())
        {
            $_SESSION['message']='Admin credentials have been sent to admin email address';

            header("Location:../view/contact.php");
        }
        else
        {
            $_SESSION['message']=$mail->ErrorInfo;
        }


}