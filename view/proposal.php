<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/10/2017
 * Time: 3:31 PM
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

        #element::-webkit-scrollbar {
            display: none;
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
    <div id="content">
        <div class="container">

            <?php

            $f = getContent('overall', $conn);
            $row = $f->fetch_assoc();
            $content = $row['content'];

            //            $file1 = "nic/uploads/$content";
            //            header('Content-type: application/pdf');
            //            header('Content-Disposition: inline; filename="' . $file1. '"');
            //            header('Content-Transfer-Encoding: binary');
            //            header('Accept-Ranges: bytes');
            //            @readfile($file1);
            ?>

            <embed src="../uploads/<?php echo $content; ?>" style="width: 100% !important; height: 1180px; position: relative;"></embed>
        </div>
    </div>

    <div style="height: 50px;"> </div>
    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>

</body>
</html>