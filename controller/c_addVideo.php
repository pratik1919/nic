<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/20/2016
 * Time: 1:47 PM
 */


include '../service/common.php';

$positionID = strip_tags($_POST['positionId']);
$code = strip_tags($_POST['code']);

addVideo($code, $positionID, $conn);

if($positionID = 'part_form'){
    header('Location: ../view/participate.php');
}else{
    header('Location: ../view/index.php');
}