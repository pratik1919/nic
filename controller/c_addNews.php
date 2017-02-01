<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/19/2016
 * Time: 5:18 PM
 */

session_start();

include '../service/common.php';

$positionID = strip_tags($_POST['positionId']);
$lang = $_SESSION['lang'];
$title = strip_tags($_POST['title']);
$date = strip_tags($_POST['date']);
$news = strip_tags($_POST['news']);
$photo =  $_FILES['photo']['name'];
$photo_tmp = $_FILES['photo']['tmp_name'];
move_uploaded_file($photo_tmp,"../img/$photo");
if($lang == 'en'){
    addNews($title, $date,  nl2br($news), $photo, $positionID, $conn);
}else{
    addNeNews($title, $date,  nl2br($news), $photo, $positionID, $conn);
}
header('Location: ../view/news.php');