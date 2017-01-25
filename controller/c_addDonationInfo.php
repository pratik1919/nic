<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/20/2016
 * Time: 11:43 AM
 */

include '../service/common.php';

$positionID = strip_tags($_POST['positionId']);
$lang = strip_tags($_POST['lang']);
$first = strip_tags($_POST['first']);
$second = strip_tags($_POST['second']);
$third = strip_tags($_POST['third']);
$forth = strip_tags($_POST['forth']);

addDonationInfo($first, $second, $third, $forth, $positionID, $lang, $conn);

header('Location: ../view/index.php');