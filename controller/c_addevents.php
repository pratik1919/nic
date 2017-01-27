<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/27/2016
 * Time: 8:42 PM
 */

session_start();


include '../service/common.php';

$title = strip_tags($_POST['title']);
$lang = strip_tags($_POST['lang']);
$date = strip_tags($_POST['date']);
$venue = strip_tags($_POST['venue']);
$desc = strip_tags($_POST['description']);
$time = strip_tags($_POST['time']);
addEvent($title, $date, $venue, $desc, $time, $lang, $conn);

header('Location: ../view/events.php');
