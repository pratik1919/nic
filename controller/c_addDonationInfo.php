<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/20/2016
 * Time: 11:43 AM
 */

include '../service/common.php';

$positionID = $_POST['positionId'];
$first = $_POST['first'];
$second = $_POST['second'];
$third = $_POST['third'];
$forth = $_POST['forth'];

addDonationInfo($first, $second, $third, $forth, $positionID, $conn);

header('Location: ../view/index.php');