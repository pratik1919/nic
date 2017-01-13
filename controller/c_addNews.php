<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/19/2016
 * Time: 5:18 PM
 */

include '../service/common.php';

$positionID = $_POST['positionId'];
$title = $_POST['title'];
$date = $_POST['date'];
$news = $_POST['news'];
$photo =  $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp,"../img/$photo");
addNews($title, $date, $news, $photo, $positionID, $conn);
header('Location: ../view/news.php');