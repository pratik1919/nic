<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 12:52 PM
 */

include '../config/dbConnect.php';



function addDonor($name, $amount, $date, $medium, $conn){
    $insertQuery = "INSERT INTO `donor`(`name`, `amount`, `medium`, `date`) VALUES ('$name', $amount, '$medium','$date')";
    $conn->query($insertQuery);
}

function getDonor($conn){
    $selectQuery = "SELECT * from `donor`";
    $result = $conn->query($selectQuery);
    return $result;
}

function addNews($title, $date, $news, $photo, $pos, $conn){
    $select = "SELECT * FROM `news` WHERE `position_id` = $pos";
    $r = $conn->query($select);
    if(isset($r)){
        $delete = "DELETE FROM `news` WHERE `position_id` = $pos";
        $conn->query($delete);
    }
    $insertQuery = "INSERT INTO `news`(`title`, `date`, `news`, `photo`, `position_id`) VALUES ('$title', '$date', '$news','$photo',$pos)";
    $conn->query($insertQuery);
}

function addContent($title, $content, $pos, $conn){
    $select = "SELECT * FROM `contents` WHERE `location_code` = '$pos'";
    $r = $conn->query($select);

    if(isset($r)){
        $delete = "DELETE FROM `contents` WHERE `location_code` = '$pos'";
        $conn->query($delete);
    }

    $insertQuery = "INSERT INTO `contents`(`location_code`, `title`, `content`) VALUES ('$pos', '$title', '$content')";
    $conn->query($insertQuery);
}

function getNews($position, $conn){
    $select = "SELECT * FROM `news` WHERE `position_id` = $position";
    $r = $conn->query($select);
    return $r;
}

function getContent($position, $conn){
    $select = "SELECT * FROM `contents` WHERE `location_code` = '$position'";
    $r = $conn->query($select);
    return $r;
}

function getDonationInfo($position, $conn){
    $select = "SELECT * FROM `dontationinfo` WHERE `location_code` = '$position'";
    $r = $conn->query($select);
    return $r;
}


function addDonationInfo($first, $second, $third, $forth, $pos, $conn){
    $select = "SELECT * FROM `DontationInfo` WHERE `location_code` = '$pos'";
    $r = $conn->query($select);
    if(isset($r)){
        $delete = "DELETE FROM `DontationInfo` WHERE `location_code` = '$pos'";
        $conn->query($delete);
    }
    $insertQuery = "INSERT INTO `DontationInfo`(`location_code`, `first`, `second`, `third`, `forth`) VALUES ('$pos', '$first', '$second', '$third', '$forth')";
    $conn->query($insertQuery);
}


function addVideo($code, $pos, $conn){
    $select = "SELECT * FROM `video` WHERE `location_code` = '$pos'";
    $r = $conn->query($select);
    if(isset($r)){
        $delete = "DELETE FROM `video` WHERE `location_code` = '$pos'";
        $conn->query($delete);
    }
    $insertQuery = "INSERT INTO `video`(`location_code`, `embed_code`) VALUES ('$pos', '$code')";
    $conn->query($insertQuery);
}

function getVideo($position, $conn){
    $select = "SELECT * FROM `video` WHERE `location_code` = '$position'";
    $r = $conn->query($select);
    return $r;
}

function getEvents($conn){
    $select = "SELECT * FROM `event`";
    $r = $conn->query($select);
    return $r;
}

function addEvent($title, $date, $venue, $desc, $conn){
    $insertQuery = "INSERT INTO `event`(`title`, `date`, `venu`, `description`) VALUES ('$title', '$date', '$venue','$desc')";
    $conn->query($insertQuery);
}