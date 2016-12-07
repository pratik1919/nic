<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 9:25 AM
 */

$server_name = "localhost";
$username    = "root"; /* database username */
$password    = ""; /* database password */
$db_name     = "nic"; /* database name */

/*Create Connection*/
$conn = mysqli_connect($server_name,$username,$password,$db_name);

/*Check Connection*/
if(mysqli_connect_errno()) {
    die("Connection failed: " . mysqli_connect_error());
}

