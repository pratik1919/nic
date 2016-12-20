<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 5:16 PM
 */

session_start();

include '../config/dbConnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stored_password = "null";
$role = "null";

$select_from_user = "SELECT * FROM user WHERE username = '$username'";

$result_from_user = $conn->query($select_from_user);

if(mysqli_num_rows($result_from_user) > 0) {
    $row = $result_from_user->fetch_assoc();
    $stored_password = $row['password'];

    if($stored_password == $password){
        $_SESSION['role'] = $row['role'];
        $_SESSION['userID'] = $row['id'];
        $_SESSION['userEmail'] = $row['email'];
        $_SESSION['userUsername'] = $row['username'];
        $_SESSION['name'] = $row['name'];
        header('Location: ../view/donorsList.php');
    }else{
        header('Location: ../view/login.php');
    }
}else{
    header('Location: ../view/login.php');
}


