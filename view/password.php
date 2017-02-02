<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/30/2017
 * Time: 9:59 AM
 */
session_start();
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
    <script src="../js/jquery.noty.packaged.min.js"></script>
    <!--    <script src="../js/topRight.js"></script>-->

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>
    <![endif]-->

    <?php
    if(isset($_SESSION["emailMessage"])){
        $message = $_SESSION["emailMessage"];
        $messageType = $_SESSION["messageType"];
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                noty({
                    text: '<?php echo $message ?>',
                    timeout: 2500,
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


<body font-family: 'Kaushan Script', cursive;">
<div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center; position: absolute;">
    <div style="text-align: center;">
        <div class="container" style="text-align: center;">

        </div>

        <div style="width: 50%; display: inline-block;">
            <div class="highlight login-div">
                <div>
                    <a href="index.php">
                    <img src="../img/logo.png" alt=""/>
                    </a>
                </div>

                <hr/>
                <br/>
                <form class="form-horizontal"  method="post" action="../controller/c_forgotPassword.php">
                    <div class="form-group">
                        <label class="glyphicon glyphicon-envelope login-glyphicon"> Enter you email:  </label>
                        <br><br>
                            <input type="text" class="form-control" name="email" required="" placeholder="email"/>

                    </div>

                    <input class="btn btn-primary btn-block" name="login" type="submit" value="Change Password"/>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>