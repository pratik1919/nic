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



<!--    change file model-->
<div id="changeFileModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change File</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="../controller/c_upload.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="positionId"/>


                    <div class="form-group">
                        <label for="">Choose File</label><br/>
                        <input type="file" name="file" required=""/>
                    </div>

                    <input type="submit" value="Add" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>


<!--    add content model-->
<div id="addContentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Content</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="../controller/c_addContent.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="positionId"/>
                    <div class="form-group">
                        <label for="">Title</label>
                        <input class="form-control" type="text" name="title"/>
                    </div>

                    <div class="form-group">
                        <label for="">Content</label><br/>
                                <textarea style="width: 100%;" name="content" id="" cols="30" rows="10" required="">
                                </textarea>
                    </div>

                    <input type="submit" value="Add" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--    donation info model-->
<div id="addVideoModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Video</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="../controller/c_addVideo.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="positionId"/>
                    <div class="form-group">
                        <label for="">Embed Code</label>
                        <input class="form-control" type="text" name="code" placeholder="make sure width = 400, height = 220"/>
                    </div>
                    <input type="submit" value="Change" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<!--    donation info model-->
<div id="addDonationModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change Donation Information</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="../controller/c_addDonationInfo.php" method="post" enctype="multipart/form-data">

                    <input type="hidden" name="positionId"/>
                    <div class="form-group">
                        <label for="">First Line</label>
                        <input class="form-control" type="text" name="first"/>
                    </div>

                    <div class="form-group">
                        <label for="">Second Line</label>
                        <input class="form-control" type="text" name="second"/>
                    </div>

                    <div class="form-group">
                        <label for="">Third Line</label>
                        <input class="form-control" type="text" name="third"/>
                    </div>

                    <div class="form-group">
                        <label for="">Forth Line</label>
                        <input class="form-control" type="text" name="forth"/>
                    </div>

                    <input type="submit" value="Change" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



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
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Concept Paper
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="conceptPaper.php">Concept Paper</a></li>
                            <li><a href="nvm.php">Need Vision Mission Goal</a></li>
                            <li><a href="unique.php ">Uniqueness & Sustainability</a></li>
                            <li><a href="request.php">Our Request</a></li>
                        </ul>
                    </li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="events.php">Coming Events</a></li>
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
