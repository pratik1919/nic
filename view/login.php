<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 9:46 AM
 */
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Student Management</title>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Ultra" rel="stylesheet">
</head>
<body font-family: 'Kaushan Script', cursive;">
<div style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center; position: absolute;">
    <div style="text-align: center;">
        <div class="container" style="text-align: center;">

        </div>

        <div style="width: 50%; display: inline-block;">
            <div class="highlight login-div">
                <div>
                    <img src="../img/logo.png" alt=""/>
                </div>

                <hr/>
                <h5 style="background-color: red; color: #ffffff;">User not found</h5>
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