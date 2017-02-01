<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 2/1/2017
 * Time: 2:50 PM
 */

include '../service/common.php';

echo checkEmail($_POST['email'], $conn);

