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
    echo $insertQuery;
    $conn->query($insertQuery);
}

function addNews($title, $content, $image, $conn){
    $insertNews = "INSERT INTO `news`(`title`, `content`, `image`) VALUES ('$title', '$content', '$image')";
    $conn->query($insertNews);
}