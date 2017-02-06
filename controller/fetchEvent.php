<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 2/6/2017
 * Time: 11:32 AM
 */

session_start();

include '../service/common.php';

$id = $_POST["id"];
$result = getEvent($id,$conn)->fetch_assoc();
echo json_encode($result);