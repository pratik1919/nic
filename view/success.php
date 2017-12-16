<?php
/**
 * Created by PhpStorm.
 * User: Sujan
 * Date: 12/6/2016
 * Time: 4:12 PM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <script src="../js/jquery.noty.packaged.min.js"></script>
    <script src="../js/topRight.js"></script>
    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>

    <![endif]-->
    <?php
    session_start();
    if (isset($_SESSION["emailMessage"])) {
        $message = $_SESSION["emailMessage"];
        $messageType = $_SESSION["messageType"];
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                noty({
                    text: '<?php echo $message ?>',
                    layout: 'topRight',
                    type: '<?php echo $messageType ?>'
                });
            });
        </script>
        <?php
        unset($_SESSION["emailMessage"]);
    }
    ?>

</head>
<body>

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>
    <!-- #header -->
    <div id="content">
        <div class="container">
            Successfully transfered fund to NIC Nepal.
        </div>
    </div>
    <div style="height: 50px;"></div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>
</body>
</html>