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
$password = md5($_POST['password']);
//$role = $_POST['role'];
$username = $_POST['username'];

addUser($name, $email, $password, $username, $conn);

header('Location: ../view/index.php');

