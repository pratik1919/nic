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

    if($_SESSION['lang'] == 'en'){
        $stmt1 = $conn->prepare("SELECT MAX(count) AS c FROM `news`");
    }else{
        $stmt1 = $conn->prepare("SELECT MAX(count) AS c FROM `ne_news`");
    }
    $stmt1->execute();
    $result = $stmt1->get_result();
    while ($row = $result->fetch_assoc()) {
        $count = $row['c'];
    }
    return $count;
}


function addNeNews($title, $date, $news, $photo, $pos, $conn){

    $stmt = $conn->prepare("SELECT * FROM `ne_news` WHERE `position_id` = ?");
    $stmt->bind_param("i", $pos);
    $stmt->execute();
    while ($stmt->fetch()) {
    }

    if ($stmt->num_rows > 0) {
        $count = getNewsCount($conn);
        $newCount = $count + 1;
        echo $newCount;
        $stmt3 = $conn->prepare("UPDATE `ne_news` SET `position_id` = ? WHERE `position_id` = ?");
        $stmt3->bind_param("ii", $newCount, $pos);
        $stmt3->execute();

        $stmt2 = $conn->prepare("UPDATE `ne_news` SET `count` = ?");
        $stmt2->bind_param("i", $newCount);
        $stmt2->execute();
    }

    $stmt4 = $conn->prepare("INSERT INTO `ne_news`(`title`, `date`, `news`, `photo`, `position_id`) VALUES (?,?,?,?,?)");
    $stmt4->bind_param("ssssi", $title, $date, $news, $photo, $pos);
    $stmt4->execute();
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

function addContent($title, $content, $pos, $lang, $conn)
{
    $select = $conn->prepare("SELECT ? FROM `contents` WHERE `location_code` = ?");
    $select->bind_param("ss", $lang, $pos);
    $select->execute();
    while ($select->fetch()){

    }

    if ($select->num_rows > 0) {
        $til =  $lang."_title";
        $update = $conn->prepare("UPDATE `contents` SET $lang = ?, $til = ? WHERE `location_code` = ?");
        $update->bind_param("sss", $content, $title, $pos);
        $update->execute();
        if ($update == false) {
            trigger_error($update->mysqli->error, E_USER_ERROR);
        }
    }else{
        $insertQuery = $conn->prepare("INSERT INTO `contents`(`location_code`, `.$lang._title`, ?) VALUES (?,?,?)");
        $insertQuery->bind_param("ssss", $lang, $pos, $title, $content);
        $insertQuery->execute();
    }

}

function getNews($position, $conn)
{
    if($_SESSION['lang'] == 'en'){
        $select = $conn->prepare("SELECT * FROM `news` WHERE `position_id` = ?");
    }else{
        $select = $conn->prepare("SELECT * FROM `ne_news` WHERE `position_id` = ?");
    }

    $select->bind_param("s", $position);
    $select->execute();
    $r = $select->get_result();
    return $r;
}


function News($conn)
{
    if($_SESSION['lang'] == 'en'){
        $select = $conn->prepare("SELECT * FROM `news`");
    }else{
        $select = $conn->prepare("SELECT * FROM `ne_news`");
    }
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


function addDonationInfo($first, $second, $third, $forth, $pos, $lang, $conn)
{
    $f = $lang."_first";
    $s = $lang."_second";
    $t = $lang."_third";
    $fo = $lang."_forth";
   
    
    $select = $conn->prepare("SELECT ? FROM dontationinfo WHERE location_code = ?");
    $select->bind_param("ss", $lang, $pos);
    $select->execute();
    while ($select->fetch()){

    }
      
    $r = $select->get_result();
    if (isset($r)) {
        $delete = $conn->prepare("UPDATE `dontationinfo` SET `$f` = ?,`$s`=?,`$t`=?,`$fo`=? WHERE `location_code` =  ?");
        $delete->bind_param("sssss", $first, $second, $third, $forth, $pos);
        $delete->execute();
    }else{
        $insertQuery = $conn->prepare("INSERT INTO `dontationinfo`(`location_code`, ?,?,?,?) VALUES (?,?,?,?,?)");
        $insertQuery->bind_param("sssssssss", $f, $s, $t, $fo, $pos, $first, $second, $third, $forth);
        $insertQuery->execute();
    }

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
    if($_SESSION['lang'] == 'en'){
        $select = "SELECT * FROM `event`";
    }else{
        $select = "SELECT * FROM `ne_event`";
    }
    $r = $conn->query($select);
    return $r;
}



function getEvent($id, $conn)
{
    if($_SESSION['lang'] == 'en'){
        $select = "SELECT * FROM `event` WHERE `id` = $id";
    }else{
        $select = "SELECT * FROM `ne_event` WHERE `id` = $id";
    }
    $r = $conn->query($select);
    return $r;
}

function addEvent($title, $date, $venue, $desc, $time, $lang, $conn)
{
    if($lang == 'en'){
        $insertQuery = "INSERT INTO `event`(`title`, `date`, `venu`, `description`,`time` ) VALUES ('$title', '$date', '$venue','$desc','$time')";
    }else{
        $insertQuery = "INSERT INTO `ne_event`(`title`, `date`, `venu`, `description`,`time` ) VALUES ('$title', '$date', '$venue','$desc','$time')";
    }
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
    if($_SESSION['lang'] == 'en'){
        $select = "SELECT * FROM `event` WHERE `id` = $pos";
    }else{
        $select = "SELECT * FROM `ne_event` WHERE `id` = $pos";
    }
    $r = $conn->query($select);
    return $r;
}


function getOlderNews($conn)
{
    if($_SESSION['lang'] == 'en'){
        $select = "SELECT * FROM `news` WHERE `position_id` > 5";
    }else{
        $select = "SELECT * FROM `ne_news` WHERE `position_id` > 5";
    }
    $r = $conn->query($select);
    return $r;
}

function addUser($name, $email, $password, $username, $conn){
    $insert = $conn->prepare("INSERT INTO `user`(`name`, `email`, `password`, `username`) VALUES (?,?,?,?)");
    $insert->bind_param("ssss", $name, $email, $password, $username);
    $insert->execute();
}

function remEvent($id, $conn){

    if($_SESSION['lang'] == 'en'){
        $conn->query("DELETE FROM `event` WHERE id=$id");
    }else{
        $conn->query("DELETE FROM `ne_event` WHERE id=$id");
    }
}


function checkEmail($email, $conn){

    $select = "SELECT * FROM `user` WHERE `email` = '$email'";
    $exist = $conn->query($select);
    return $exist;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}


function validateUsername($conn, $username){

    $query_select = "select * from user WHERE username='$username'" ;

    $result = mysqli_query($conn,$query_select);

    $data =array();

    if(mysqli_num_rows($result)>0){
        $data['message']='success';
    }
    else{
        $data['message']='fail';
    }

    return json_encode($data);
}

function validateEmail($conn, $email){

    $query_select = "select * from user WHERE email='$email'" ;

    $result = mysqli_query($conn,$query_select);

    $data =array();

    if(mysqli_num_rows($result)>0){
        $data['message']='success';
    }
    else{
        $data['message']='fail';
    }

    return json_encode($data);
}

function editEvent($id, $title, $date, $time, $venue, $description, $conn){
    if($_SESSION['lang'] == 'en'){
        $insertQuery = "UPDATE `event` SET `title`='$title',`date`='$date',`time`='$time',`venu`='$venue',`description`='$description' WHERE `id` = $id";
    }else{
        $insertQuery = "UPDATE `ne_event` SET `title`='$title',`date`='$date',`time`='$time',`venu`='$venue',`description`='$description' WHERE `id` = $id";
    }
    $conn->query($insertQuery);
}