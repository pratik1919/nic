<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 9:46 AM
 */
session_start();
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Ultra" rel="stylesheet">
</head>
<body 'font-family': 'Kaushan Script', cursive;">
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

<?php
if(isset($_SESSION['notLogin'])){
?>
<h5 style="background-color: red; color: #ffffff;">Userame or password not matched</h5>


<?php
session_unset();
}
?>
                
                <br/>
                <form class="form-horizontal"  method="post" action="../controller/c_login.php">
                    <!--        <legend><h2>System Login</h2></legend>-->
                    <div class="form-group">
                        <label class="glyphicon glyphicon-user col-md-2 login-glyphicon"> Username: </label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="username" required="" placeholder="username"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="glyphicon glyphicon-pencil col-md-2 login-glyphicon" for=""> Password: </label>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="password" required="" placeholder="password"/>
                        </div>
                    </div>

                    <input class="btn btn-primary btn-block" name="login" type="submit" value="login"/>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>