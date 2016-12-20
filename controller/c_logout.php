<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 3:14 PM
 */

session_start();

session_unset();

session_destroy();

header('Location: ../view');