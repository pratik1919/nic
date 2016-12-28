<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/27/2016
 * Time: 8:42 PM
 */


include '../service/common.php';

$title = $_POST['title'];
$date = $_POST['date'];
$venue = $_POST['venue'];
$desc = $_POST['description'];

addEvent($title, $date, $venue, $desc, $conn);

header('Location: ../view/events.php');
