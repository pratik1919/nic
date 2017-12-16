<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/5/2017
 * Time: 11:33 AM
 */


include'../config/dbConnect.php';

if(isset($_POST['s'])){
    $id = $_POST['id'];
    $menu = $_POST['menu'];
    

    $conn->query("UPDATE `header` SET `ne`= '$menu' WHERE `id` = $id");
}
?>

<html>
<head></head>
<body>

<form action="try.php" method="post">
    <input type="text" name="id"/>
    <input type="text" name="menu"/>
    <input type="submit" name="s" value="s"/>
</form>

</body>
</html>