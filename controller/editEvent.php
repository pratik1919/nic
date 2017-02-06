<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 4:12 PM
 */

session_start();

include '../service/common.php';

editEvent($_POST['eid'], $_POST['title'], $_POST['date'], $_POST['time'], $_POST['venue'], $_POST['description'], $conn);
header("Location: ../view/events.php");