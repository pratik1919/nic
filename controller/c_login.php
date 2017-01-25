<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 5:16 PM
 */

session_start();

include '../config/dbConnect.php';

$username = strip_tags($_POST['username']);
$password = strip_tags($_POST['password']);

$stored_password = "null";
$role = "null";

$stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($id, $name, $email, $pass, $role, $uname);
while ($stmt->fetch()){
    echo $name;
}


if($stmt->num_rows > 0) {
    $stmt->fetch();
    $stored_password = $pass;

    if($stored_password == $password){
        $_SESSION['role'] = $role;
        $_SESSION['userID'] = $id;
        $_SESSION['userEmail'] = $email;
        $_SESSION['userUsername'] = $uname;
        $_SESSION['name'] = $name;
        header('Location: ../view/index.php');
    }else{
        header('Location: ../view/login.php');
    }
}else{
    header('Location: ../view/login.php');
}


$stmt->close();
$mysqli->close();

