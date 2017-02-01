<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/30/2017
 * Time: 10:07 AM
 */

session_start();

include '../config/dbConnect.php';
include '../service/common.php';

$email = $_POST['email'];

$exist = checkEmail($email, $conn);

if ($exist->num_rows > 0) {
    while ($row = $exist->fetch_assoc()) {
        $name = $row['name'];
        $username = $row['username'];
    }
    $newPassword = generateRandomString(10);



    require_once('../PHPMailer-master/PHPMailerAutoload.php');
    $mail = new PHPMailer();
    $mail->CharSet = "utf-8";
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
    $mail->FromName = 'NIC';
    $mail->AddAddress("$email");
    $mail->Subject = 'NIC Site Password Changed';
    $mail->IsHTML(true);
    $mail->Body = 'Hello! ' . $name . ', <br><br>You password for NIC site has been successfully changed.<br><br>Your new Password : &nbsp; ' . $newPassword . ' <br>Username : ' . $username . '<br><br>Best Wishes,<br>NIC';

    if ($mail->Send()) {
        $_SESSION['emailMessage'] = 'New Password is emailed!';
        $_SESSION['messageType'] = 'information';
        $querychange = $conn->query("UPDATE user SET password='$newPassword' WHERE email='$email'");
        header("Location:../view/password.php");
    } else {
        $_SESSION['emailMessage'] = "Password not changed! Check internet connection.";
        $_SESSION['messageType'] = 'warning';
        header("Location:../view/password.php");
    }

} else {
    $_SESSION['emailMessage'] = "Email not Registered";
    $_SESSION['messageType'] = 'warning';
    header("Location:../view/password.php");
}