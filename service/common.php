<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 12:52 PM
 */

include '../config/dbConnect.php';


function addDonor($name, $amount, $date, $medium, $address, $conn)
{
    $insertQuery = $conn->prepare("INSERT INTO `donor`(`name`, `amount`, `medium`, `date`, `address`) VALUES (?,?,?,?,?)");
    $insertQuery->bind_param("sssss", $name, $amount, $medium, $date, $address);
    $insertQuery->execute();
}

function getDonor($med, $conn)
{
    $selectQuery = $conn->prepare("SELECT * from `donor` WHERE `medium` = ?");
    $selectQuery->bind_param("s", $med);
    $selectQuery->execute();
    $result = $selectQuery->get_result();
    return $result;
}


function getNewsCount($conn){
    $stmt1 = $conn->prepare("SELECT MAX(count) AS c FROM `news`");
    $stmt1->execute();
    $result = $stmt1->get_result();
    while ($row = $result->fetch_assoc()) {
        $count = $row['c'];
    }
    return $count;
}

function addNews($title, $date, $news, $photo, $pos, $conn)
{
    $stmt = $conn->prepare("SELECT * FROM `news` WHERE `position_id` = ?");
    $stmt->bind_param("i", $pos);
    $stmt->execute();
    while ($stmt->fetch()) {
    }

    if ($stmt->num_rows > 0) {


        $count = getNewsCount($conn);
        $newCount = $count + 1;
        echo $newCount;
        $stmt3 = $conn->prepare("UPDATE `news` SET `position_id` = ? WHERE `position_id` = ?");
        $stmt3->bind_param("ii", $newCount, $pos);
        $stmt3->execute();

        $stmt2 = $conn->prepare("UPDATE `news` SET `count` = ?");
        $stmt2->bind_param("i", $newCount);
        $stmt2->execute();
    }

    $stmt4 = $conn->prepare("INSERT INTO `news`(`title`, `date`, `news`, `photo`, `position_id`) VALUES (?,?,?,?,?)");
    $stmt4->bind_param("ssssi", $title, $date, $news, $photo, $pos);
    $stmt4->execute();

}

function addContent($title, $content, $pos, $conn)
{
    $select = $conn->prepare("SELECT * FROM `contents` WHERE `location_code` = ?");
    $select->bind_param("s", $pos);
    $select->execute();
    while ($select->fetch()){

    }

    if ($select->num_rows > 0) {
        $delete = $conn->prepare("DELETE FROM `contents` WHERE `location_code` = ?");
        $delete->bind_param("s", $pos);
        $delete->execute();
    }

    $insertQuery = $conn->prepare("INSERT INTO `contents`(`location_code`, `title`, `content`) VALUES (?,?,?)");
    $insertQuery->bind_param("sss", $pos, $title, $content);
    $insertQuery->execute();
}

function getNews($position, $conn)
{


    $select = $conn->prepare("SELECT * FROM `news` WHERE `position_id` = ?");
    $select->bind_param("s", $position);
    $select->execute();
    $r = $select->get_result();
    return $r;
}

function getContent($position, $conn)
{
    $select = $conn->prepare("SELECT * FROM `contents` WHERE `location_code` = ?");
    $select->bind_param("s", $position);
    $select->execute();
    $r = $select->get_result();
    return $r;
}

function getDonationInfo($position, $conn)
{

    $select = $conn->prepare("SELECT * FROM `dontationinfo` WHERE `location_code` = ?");
    $select->bind_param("s", $position);
    $select->execute();
    $r = $select->get_result();
    return $r;
}


function addDonationInfo($first, $second, $third, $forth, $pos, $conn)
{
    $select = $conn->prepare("SELECT * FROM `DontationInfo` WHERE `location_code` = ?");
    $select->bind_param("s", $pos);
    $select->execute();
    $r = $select->get_result();
    if (isset($r)) {
        $delete = $conn->prepare("DELETE FROM `DontationInfo` WHERE `location_code` =  ?");
        $delete->bind_param("s", $pos);
        $delete->execute();
    }
    $insertQuery = $conn->prepare("INSERT INTO `DontationInfo`(`location_code`, `first`, `second`, `third`, `forth`) VALUES (?,?,?,?,?)");
    $insertQuery->bind_param("sssss",$pos, $first, $second, $third, $forth);
    $insertQuery->execute();
}


function addVideo($code, $pos, $conn)
{


    $select = $conn->prepare("SELECT * FROM `video` WHERE `location_code` = ?");
    $select->bind_param("s", $pos);
    $select->execute();
    $r = $select->get_result();
    if (isset($r)) {
        $delete = $conn->prepare("DELETE FROM `video` WHERE `location_code` = ?");
        $delete->bind_param("s", $pos);
        $delete->execute();
    }
    $insertQuery = $conn->prepare("INSERT INTO `video`(`location_code`, `embed_code`) VALUES (?,?)");
    $insertQuery->bind_param("ss",$pos, $code);
    $insertQuery->execute();

}

function getVideo($position, $conn)
{
    $select = "SELECT * FROM `video` WHERE `location_code` = '$position'";
    $r = $conn->query($select);
    return $r;
}

function getEvents($conn)
{
    $select = "SELECT * FROM `event`";
    $r = $conn->query($select);
    return $r;
}

function addEvent($title, $date, $venue, $desc, $conn)
{
    $insertQuery = "INSERT INTO `event`(`title`, `date`, `venu`, `description`) VALUES ('$title', '$date', '$venue','$desc')";
    $conn->query($insertQuery);
}

function getMenu($lang, $conn)
{
    $select = "SELECT `$lang`, `path` FROM `header`";
    $result = $conn->query($select);
    return $result;
}

function readEvents($pos, $conn)
{
    $select = "SELECT * FROM `event` WHERE `id` = $pos";
    $r = $conn->query($select);
    return $r;
}


function getOlderNews($conn)
{
    $select = "SELECT * FROM `news` WHERE `position_id` > 5";
    $r = $conn->query($select);
    return $r;
}