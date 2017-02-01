<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/20/2016
 * Time: 11:13 AM
 */


include '../service/common.php';

$positionID = strip_tags($_POST['positionId']);
$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);
$lang = strip_tags($_POST['lang']);

addContent($title, nl2br($content), $positionID, $lang, $conn);

header('Location: ../view/index.php');