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
        $oldPassword = $_POST['oldPassword'];
        $newPassword = $_POST['newPassword'];
        $repPassword = $_POST['confirmPassword'];

        $getQuery = $conn->query("SELECT password FROM user WHERE username='$user'") or die("Query didn't work");
        $row = mysqli_fetch_assoc($getQuery);

        $oldPassword1 = $row['password'];

        //check password
        if ($oldPassword == $oldPassword1) {
            if ($newPassword == $repPassword) {

                if (strlen($newPassword) > 15 || strlen($newPassword) < 6) {
                    echo "Password must be betwwen 6 & 15";
                } else {
                    $querychange = $conn->query("UPDATE user SET password='$newPassword' WHERE username='$user'");

                    session_destroy();
                }
            } else
                echo("New Password don't matched");

        } else
            echo("Old Password doesn't matched");
    }else{
        echo"Password changed successfully";
    }

}else{
    header('Location: ../view/index.php');
}
?>

