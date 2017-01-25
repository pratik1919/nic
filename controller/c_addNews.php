<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/19/2016
 * Time: 5:18 PM
 */

include '../service/common.php';

$positionID = strip_tags($_POST['positionId']);
$title = strip_tags($_POST['title']);
$date = strip_tags($_POST['date']);
$news = strip_tags($_POST['news']);
$photo =  $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp,"../img/$photo");
addNews($title, $date, $news, $photo, $positionID, $conn);
header('Location: ../view/news.php');