<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 1/23/2017
 * Time: 7:14 PM
 */

session_start();

include '../config/dbConnect.php';
$user = $_SESSION['userUsername'];

if ($user) {
    if ($_POST['submit']) {
        //user is logged in
        $oldPassword = strip_tags($_POST['oldPassword']);
        $newPassword = strip_tags($_POST['newPassword']);
        $repPassword = strip_tags($_POST['confirmPassword']);

        $getQuery = $conn->query("SELECT password FROM user WHERE username='$user'") or die("Query didn't work");
        $row = mysqli_fetch_assoc($getQuery);

        $oldPassword1 = $row['password'];

        //check password
        if ($oldPassword == $oldPassword1) {
            if ($newPassword == $repPassword) {

                if (strlen($newPassword) > 15 || strlen($newPassword) < 6) {
                    $_SESSION['emailMessage']='Password must be between 6 & 15';
                    $_SESSION['messageType']='change';
                    header("Location:../view/a_Changepassword.php");

                } else {
                    $querychange = $conn->query("UPDATE user SET password='$newPassword' WHERE username='$user'");
                    $_SESSION['emailMessage']='Password changed successfully';
                    $_SESSION['messageType']='information';
                    header("Location:../view/a_Changepassword.php");

                }
            } else {
                $_SESSION['emailMessage'] = 'New Password does not match!';
                $_SESSION['messageType'] = 'change';
                header("Location:../view/a_Changepassword.php");
            }

        } else {
            $_SESSION['emailMessage'] = 'Old Password does not matched';
            $_SESSION['messageType'] = 'change';
            header("Location:../view/a_Changepassword.php");
        }
    }else{
        $_SESSION['emailMessage']='Password changed successfully';
        $_SESSION['messageType']='information';
        header("Location:../view/a_Changepassword.php");
    }

}else{
    header('Location: ../view/index.php');
}
?>

