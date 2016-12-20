<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/20/2016
 * Time: 11:13 AM
 */


include '../service/common.php';

$positionID = $_POST['positionId'];
$title = $_POST['title'];
$content = $_POST['content'];

addContent($title, $content, $positionID, $conn);

header('Location: ../view/index.php');