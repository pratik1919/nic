<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:13 PM
 */

include '../service/common.php';

$name = strip_tags($_POST['name']);
$amount = strip_tags($_POST['amount']);
$medium = strip_tags($_POST['medium']);
$date = strip_tags($_POST['date']);

addDonor($name, $amount, $medium, $date, $conn);

header('Location: ../view/donorsList.php');
