<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 2/1/2017
 * Time: 1:42 PM
 */

include '../service/common.php';

echo checkUser($_POST['username'], $conn);