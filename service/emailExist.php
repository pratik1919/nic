<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 2/2/2017
 * Time: 9:51 PM
 */

include 'common.php';

echo validateEmail($conn, $_POST["username"]);