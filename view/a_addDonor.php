<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:02 PM
 */

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>

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

    <div id="content" class="container">
        <form class="form" action="../controller/c_addDonor.php" method="post">
            <div class="form-group">
                <label for="">Name</label>
                <input class="form-control" type="text" name="name" required=""/>
            </div>

            <div class="form-group">
                <label for="">Amount</label>
                <input class="form-control" type="number" name="amount" required=""/>
            </div>

            <div class="form-group">
                <label for="">Medium</label>
                <input class="form-control" type="text" name="medium" required=""/>
            </div>

            <div class="form-group">
                <label for="">Date</label>
                <input class="form-control" type="date" name="date" required=""/>
            </div>

            <input type="submit" value="Add" class="btn btn-primary btn-block"/>
        </form>
    </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>
</body>
</html>