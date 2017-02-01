<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 12/7/2016
 * Time: 3:02 PM
 */

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>


    <!--[if lt IE 7]>
    <style type="text/css">
    #wrapper {
    height: 100%;
        }
    </style>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
</div>
<!-- #header -->
<!--<h1></h1>-->
<div id="content" class="container">
<form class="form" action="../controller/c_addNews.php" method="post">
    <div class="form-group">
        <label for="">Title</label>
        <input class="form-control" type="text" name="title" required=""/>
    </div>

    <div class="form-group">
        <label for="">Content</label>
        <textarea style="height: 300px"; class="form-control" type="number" name="content" required=""></textarea>
    </div>

    <div class="form-group">
        <label for="">Image</label>
        <input  type="file" name="image" required=""/>
    </div>



    <input type="submit" value="Add" class="btn btn-primary btn-block"/>

</form>
</div>
    <div style="height: 50px;"> </div>
<div id="footer">
    <?php
    include '_footer.php';
    ?>
</div>
<!-- #footer -->
</body>
</html>