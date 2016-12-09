<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 12/7/2016
 * Time: 3:18 PM
 */

include '../service/common.php';


$title = $_POST['title'];

$content = $_POST['content'];
$image = $_POST['image'];

addNews($title, $content, $image, $conn);

header('Location: ../view/a_news.php');

