<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 4:12 PM
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

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>
    <![endif]-->
</head>
<body>

<!--eSewa Model model-->
<div id="esewaModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background-color: #ea4335; color: white;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Donate through E-Sewa</h4>
            </div>
            <div class="modal-body">
                <form class="form" action="http://esewa.com.np/donate/main" method="POST">

                    <div class="form-group">
                    <label for="">Amount in Rupees:</label>
                    <input class="form-control" name="amt" type="number">
                    </div>
                    <input value="c851d56b-71a7-4a23-b273-2a90e29bd9e2" name="refid" type="hidden">

                    <input value="http://localhost/nic/view/success.php" type="hidden" name="surl">

                    <input value="http://localhost/nic/view/failure.php" type="hidden" name="furl">

                    <input class="btn btn-primary" value="Donate" type="submit">

                </form>
            </div>
            <div class="modal-footer" style="background-color: #ea4335;">
                <button id="clbtn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>



<!--    Read Model model-->
<div id="readMoreModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Change File</h4>
            </div>
            <div class="modal-body">
                <div id="name"></div>
            </div>
            <div class="modal-footer">
                <button id="clbtn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php';   ?>

    </div>
    <!-- #header -->

    <div id="content">


        <div class="container">
            <div class="col-md-4" style="position: relative ; z-index: -1; zoom: 80%">
                <img src="../img/mahabripun_final.png" alt=""/>
            </div>

            <div class="col-md-8 pull-right">
                <div class="row">
                    <div class="title col-md-6">
                        <h2>Mahabir Pun</h2>
                        <hr/>
                        <h4>Founder of NIC</h4>
                    </div>
                    <div class="col-md-6 center">
                        <a href="#donationInfo" style="text-decoration: none;"><button style="margin-top: 35px;" class="btn btn-block btn-success"><span></span> Donate Now!
                        </button></a>
                    </div>
                </div>
                <div class="row paragraph">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-1" data-toggle="modal" data-target="#addContentModal">
                        </button>
                        </div>
                    <?php
                    }

                    $content = getContent('landing-1', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <p>
                        <?php echo $row[$_SESSION['lang']]; ?>
                    </p>
            </div>
            </div>
        </div>

        <div class="row donation-medium" id="donationInfo">
            <h2 class="center">Donate Now</h2>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <div class="changeBtnDiv">
                    <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="donation-1" data-toggle="modal" data-target="#addDonationModal">
                    </button>
                    </div>
                <?php
                }

                $donationInfo = getDonationInfo('donation-1', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h5><?php echo $row[$_SESSION['lang'].'_first']; ?></h5>
                <h5><?php echo $row[$_SESSION['lang'].'_second']; ?></h5>
                <?php
        if($_SESSION['lang'] == 'ne') {
            ?>
           <h5> राष्ट्रिय आविष्कार केन्द्र </h5>
            <?php
            }else{
            ?>
            <h5>Beneficiary: &nbsp; Rashtriya Awishkar Kendra</h5>
            <?php
            }
            ?>
         
                <h5><?php echo $row[$_SESSION['lang'].'_third']; ?></h5>
                <h6><?php echo $row[$_SESSION['lang'].'_forth']; ?></h6>
            </div>
            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                ?>
                <div class="changeBtnDiv">
                    <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="donation-2" data-toggle="modal" data-target="#addDonationModal">
                    </button>
                </div>
                <?php
                }

                $donationInfo = getDonationInfo('donation-2', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h5><?php echo $row[$_SESSION['lang'].'_first']; ?></h5>
                <h5><?php echo $row[$_SESSION['lang'].'_second']; ?></h5>
                <?php
        if($_SESSION['lang'] == 'ne') {
            ?>
           <h5> राष्ट्रिय आविष्कार केन्द्र </h5>
            <?php
            }else{
            ?>
            <h5>Beneficiary: &nbsp; Rashtriya Awishkar Kendra</h5>
            <?php
            }
            ?>
                <h5><?php echo $row[$_SESSION['lang'].'_third']; ?></h5>
                <h6><?php echo $row[$_SESSION['lang'].'_forth']; ?></h6>
            </div>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil"  >
                        </button>
                    </div>
                    <?php
                }

                $donationInfo = getDonationInfo('donation-3', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h5><?php echo $row[$_SESSION['lang'].'_first']; ?></h5>
                <h5><?php echo $row[$_SESSION['lang'].'_second']; ?></h5>
                <h5 data-toggle="modal" data-target="#esewaModal"><?php echo $row[$_SESSION['lang'].'_third']; ?></h5>
                <h6><?php echo $row[$_SESSION['lang'].'_forth']; ?></h6>
            </div>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="donation-4" data-toggle="modal" data-target="#addDonationModal">
                        </button>
                    </div>
                    <?php
                }

                $donationInfo = getDonationInfo('donation-4', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h5><?php echo $row[$_SESSION['lang'].'_first']; ?></h5>
                <h5><?php echo $row[$_SESSION['lang'].'_second']; ?></h5>
                <a href="https://www.gofundme.com/nic-nepal" style="text-decoration: none; color: white;"><h5><?php echo $row[$_SESSION['lang'].'_third']; ?></h5></a>
                <h6><?php echo $row[$_SESSION['lang'].'_forth']; ?></h6>
            </div>
        </div>

        <div class="goal">
            <div style="padding-left: 20px;">
                <img src="../img/logo.png" alt=""/>
            </div>
            <div class="row">
                <div class="container">

                    <div class="col-md-4">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <div class="changeBtnDiv">
                            <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-2" data-toggle="modal" data-target="#addContentModal">
                            </button>
                            </div>
                        <?php
                        }

                        $content = getContent('landing-2', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                        <h3><?php echo $row[$_SESSION['lang'].'_title']; ?></h3>

                        <p><?php echo $row[$_SESSION['lang']]; ?></p>
                        </div>

                        <div class="left"><a href="more.php?read=landing-2">more</a></div class="left">
                    </div>

                    <div class="col-md-4">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <div class="changeBtnDiv">
                            <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-3" data-toggle="modal" data-target="#addContentModal">
                            </button>
                            </div>
                        <?php
                        }

                        $content = getContent('landing-3', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                            <h3><?php echo $row[$_SESSION['lang'].'_title']; ?></h3>

                            <p><?php echo $row[$_SESSION['lang']]; ?></p>
                        </div>

                        <div class="left"><a href="more.php?read=landing-3">more</a></div class="left">

                    </div>

                    <div class="col-md-4">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <div class="changeBtnDiv">
                            <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-4" data-toggle="modal" data-target="#addContentModal">
                            </button>
                            </div>
                        <?php
                        }

                        $content = getContent('landing-4', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                            <h3><?php echo $row[$_SESSION['lang'].'_title']; ?></h3>

                            <p><?php echo $row[$_SESSION['lang']]; ?></p>
                        </div>

                        <div class="left"><a href="more.php?read=landing-4">more</a></div class="left">

                    </div>

                </div>
            </div>
        </div>

        <div class="row work">
            <div class="container">
                <div class="col-md-7">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-5" data-toggle="modal" data-target="#addContentModal">
                        </button>
                        </div>
                    <?php
                    }

                    $content = getContent('landing-5', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <h3><?php echo $row[$_SESSION['lang'].'_title']; ?></h3>
                    <br/><br/>

                   <p><?php echo $row[$_SESSION['lang']]; ?></p>
                </div>
                <div class="col-md-5 videos">
                    <div class="center" style="max-height: 220px; max-width: 400px;">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <div class="changeBtnDiv">
                            <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="video-1" data-toggle="modal" data-target="#addVideoModal">
                            </button>
                            </div>
                        <?php
                        }
                        $content = getVideo('video-1', $conn);
                        $row = $content->fetch_assoc();
                        echo $row['embed_code'];
                        ?>

                    </div>
                    <div class="center" style="max-height: 220px; max-width: 400px;">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <div class="changeBtnDiv">
                            <button style="z-index: 100;" class="btn btn-default glyphicon glyphicon-pencil" data-position-id="video-2" data-toggle="modal" data-target="#addVideoModal">
                            </button>
                            </div>
                        <?php
                        }
                        $content = getVideo('video-2', $conn);
                        $row = $content->fetch_assoc();
                        echo $row['embed_code'];
                        ?>

                    </div>
                </div>
            </div>
        </div>

        <?php
        if($_SESSION['lang'] == 'ne') {
            ?>


            <div class="row paper gradient">

                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <div class="changeBtnDiv">
                    <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="overall" data-toggle="modal" data-target="#changeFileModal">
                        Change file
                    </button>
                    </div>
                <?php
                }
                ?>
                <div class="center">
                    <a href="proposal.php"><h2 style="color: white;">आविष्कार केन्द्र बारे विस्तृत विवरण</h2></a>
                </div>
            </div>


        <?php
        }
        ?>


        <div class="row support">
            <div class="container">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <div class="changeBtnDiv">
                        <button class="btn btn-default glyphicon glyphicon-pencil" data-position-id="landing-6" data-toggle="modal" data-target="#addContentModal">
                        </button>
                        </div>
                    <?php
                    }

                    $content = getContent('landing-6', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <h3><?php echo $row[$_SESSION['lang'].'_title']; ?></h3>

                   <p><?php echo $row[$_SESSION['lang']]; ?></p>
                </div>
            </div>
        </div>


    </div>
    <!-- #content -->

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->

</div>
<!-- #wrapper -->



<script>
    $('#addContentModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });

    $('#addDonationModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });
    $('#addVideoModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });
    $('#changeFileModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });
</script>
</body>
</html>