<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 1/26/2017
 * Time: 1:28 PM
 */

include '../service/common.php';

$id = $_GET['id'];

remEvent($id, $conn);

header('Location: ../view/events.php');