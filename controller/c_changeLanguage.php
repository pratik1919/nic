<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/5/2017
 * Time: 11:09 AM
 */


session_start();
$_SESSION['l'] = 1;
$_SESSION['language'] = $_GET['lang'];

header('Location: ../view/index.php');