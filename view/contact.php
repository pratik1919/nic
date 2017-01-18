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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/jquery.noty.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <script src="../js/jquery.noty.packaged.min.js"></script>
    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>
    <![endif]-->
    <script>
        <?php
        if(isset($_SESSION["message"])){
        $message = $_SESSION["message"];
        $messageType = $_SESSION["messageType"];
        ?>
        alert("Hello");
        notyMessage(<?php echo $message ?>,<?php echo $messageType ?>);
        <?php
        unset($_SESSION["message"]);
        }
        ?>
        function notyMessage(message,messageType) {
            noty({ text: message});
            noty({
             text: message,
             layout: 'topRight',
             type: messageType
             });
        }
    </script>
</head>
<body>

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>
    <!-- #header -->
    <div id="content">
        <div class="container" style="width: 80%;">
            <legend>Send us an Email</legend>
            <form action="../controller/sendEmail.php" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email"/>
                </div>
                <div class="form-group">
                    <label for="">Message</label><br/>
                    <textarea name="message" id="" rows="10" style="width: 100%"></textarea>
                </div>
                <input type="submit" class="btn btn-block btn-primary" value="send"/>
            </form>
        </div>
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