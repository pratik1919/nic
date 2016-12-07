<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:13 PM
 */

include '../service/common.php';

$name = $_POST['name'];
$amount = $_POST['amount'];
$medium = $_POST['medium'];
$date = $_POST['date'];

addDonor($name, $amount, $medium, $date, $conn);

header('Location: ../view/a_addDonor.php');
