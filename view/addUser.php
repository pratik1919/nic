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

    <div id="content" class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 style="color: #ffffff">Change Password</h4>

                <form class="form" role="form" method="post"
                      action="../controller/a_addUser.php" accept-charset="UTF-8"
                      id="login-nav">
                    <div class="form-group">
                        <label  for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <label  for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" id="email" required="" onchange="checkEmail();">
                        <div class="error email">Email already exists</div>
                    </div>
                    <div class="form-group">
                        <label  for="">Password</label>
                        <input type="password"  class="form-control" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label  for="">Username</label>
                        <input type="text"  class="form-control" name="username" id="username" placeholder="Username" required="" onchange="checkUsername();">
                        <div class="error username">Username already exists</div>
                    </div>
                    <div class="addDiv">
                        <input class="btn btn-primary" type='submit' name='submit' id = "registerButton" value='Add User'>
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


<script>
    function checkUsername(){
        var username = document.getElementById('username').value;

        $.ajax({
            type:'POST',
            url:'../service/usernameExists.php',
            data:'username='+username,
            success:function(data){

                var jsonData = JSON.parse(data);
                //alert(jsonData);
                if(jsonData.message == "fail"){

                    $("#username").attr('style', 'border: 1px solid blue');
                    $(".username").attr('style', 'display: none;');
                    $("#registerButton").prop('disabled', false);
                }else{
                    $("#username").attr('style', 'border: 2px solid red');
                    $(".username").attr('style', 'display: block;');
                    $("#registerButton").prop('disabled', true);
                }
            }
        })
    }

    function checkEmail(){
        var username = document.getElementById('email').value;

        $.ajax({
            type:'POST',
            url:'../service/emailExist.php',
            data:'username='+username,
            success:function(data){

                var jsonData = JSON.parse(data);
                //alert(jsonData);
                if(jsonData.message == "fail"){

                    $("#email").attr('style', 'border: 1px solid blue');
                    $(".email").attr('style', 'display: none;');
                    $("#registerButton").prop('disabled', false);
                }else{
                    $("#email").attr('style', 'border: 2px solid red');
                    $(".email").attr('style', 'display: block;');
                    $("#registerButton").prop('disabled', true);
                }
            }
        })
    }

</script>
</body>
</html>
