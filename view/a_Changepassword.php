<?php
/**
 * Created by PhpStorm.
 * User: Sujan  Chauhan
 * Date: 1/23/2017
 * Time: 7:10 PM
 */
session_start();
if(!isset($_SESSION["userID"])){
    header("Location:index.php");
}
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
<body>
<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>

<div id="content" class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 style="color: #ffffff">Change Password</h4>

            <form class="form" role="form" method="post"
                  action="../controller/a_ChangePassword.php" accept-charset="UTF-8"
                  id="login-nav">
                <div class="form-group">
                    <label  for="">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" placeholder="Old Password" required>
                </div>
                <div class="form-group">
                    <label  for="">New Password</label>
                    <input type="password" class="form-control" name="newPassword" placeholder="Password" required>

                </div>
                <div class="form-group">
                    <label  for="">Confirm Password</label>
                    <input type="password"  class="form-control" name="confirmPassword" placeholder="Confirm Password" required>
                </div>
                <div style="text-align: right;">
                    <input class="btn btn-primary" type='submit' name='submit' value='Change Password'>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<div style="height: 50px;"> </div>
<div id="footer">
    <?php
    include '_footer.php';
    ?>
</div>
</body>
</html>
