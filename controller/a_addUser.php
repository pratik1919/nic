<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 1/24/2017
 * Time: 8:58 PM
 */


include '../service/common.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$username = $_POST['username'];
/*echo checkUser($username,$conn);
checkEmail($email,$conn);*/
addUser($name, $email, $password,  $username, $conn);

header('Location: ../view/index.php');

