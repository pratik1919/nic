<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 4:15 PM
 */

session_start();

include '../service/common.php';

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>


    <!--    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>-->

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>
    <![endif]-->
</head>
<body>

<div class="col-lg-2">
    <img src="../img/logo.png" alt=""/>
</div>
<div class="col-md-10" style="padding: 0px;">
    <!--<div class="loginDiv"><a href="">login</a></div>-->
    <nav class="navbar" style="background-color: #001973; border-radius: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Concept Paper</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="#">Comming Events</a></li>
                    <li><a href="#">Participate</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="donorsList.php">Donors List</a></li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">

                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                </form>


                <?php
                if (isset($_SESSION['userUsername'])) {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Hi <?php echo $_SESSION['userUsername']; ?></b> <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="">Change Password</a></li>
                                <li><a href="../controller/c_logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                <?php
                } else {
                    ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span
                                    class="caret"></span></a>
                            <ul id="login-dp" class="dropdown-menu">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 style="color: #ffffff">Login</h4>

                                            <form class="form" role="form" method="post"
                                                  action="../controller/c_login.php" accept-charset="UTF-8"
                                                  id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="username">Username</label>
                                                    <input type="text" class="form-control" name="username"
                                                           placeholder="Username" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="Password">Password</label>
                                                    <input type="password" class="form-control" name="password"
                                                           placeholder="Password" required>

                                                    <div class="help-block text-right"><a href="">Forget the password
                                                            ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Sign in"
                                                           class="btn btn-primary btn-block">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                <?php
                }
                ?>

            </div>
        </div>
    </nav>
</div>


</body>
</html>
