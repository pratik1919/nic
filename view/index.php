<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 4:12 PM
 */

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>

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
    <!-- #header -->





    <div id="content">


        <div class="container">
            <div class="col-md-4">
                <img src="../img/mahabripun_final.png" alt=""/>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="title col-md-6">
                        <h2>Mahabir Pun</h2>
                        <hr/>
                        <h4>Founder of NIC</h4>
                    </div>
                    <div class="col-md-6 center">
                        <button style="margin-top: 35px;" class="btn btn-block btn-success"><span></span> Donate Now!
                        </button>
                    </div>
                </div>
                <div class="row paragraph">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <button class="btn btn-block btn-primary" data-position-id="landing-1" data-toggle="modal" data-target="#addContentModal">
                            Change Content
                        </button>
                    <?php
                    }

                    $content = getContent('landing-1', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <p>
                        <?php echo $row['content']; ?>
                    </p>
            </div>
            </div>
        </div>

        <div class="row donation-medium">
            <h2 class="center">Donate Now</h2>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="donation-1" data-toggle="modal" data-target="#addDonationModal">
                        Change Donation Information
                    </button>
                <?php
                }

                $donationInfo = getDonationInfo('donation-1', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h3><?php echo $row['first']; ?></h3>
                <h5><?php echo $row['second']; ?></h5>
                <h4><?php echo $row['third']; ?></h4>
                <h6><?php echo $row['forth']; ?></h6>
            </div>
            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="donation-2" data-toggle="modal" data-target="#addDonationModal">
                        Change Donation Information
                    </button>
                <?php
                }

                $donationInfo = getDonationInfo('donation-2', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h3><?php echo $row['first']; ?></h3>
                <h5><?php echo $row['second']; ?></h5>
                <h4><?php echo $row['third']; ?></h4>
                <h6><?php echo $row['forth']; ?></h6>
            </div>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="donation-3" data-toggle="modal" data-target="#addDonationModal">
                        Change Donation Information
                    </button>
                <?php
                }

                $donationInfo = getDonationInfo('donation-3', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h3><?php echo $row['first']; ?></h3>
                <h5><?php echo $row['second']; ?></h5>
                <h4><?php echo $row['third']; ?></h4>
                <h6><?php echo $row['forth']; ?></h6>
            </div>

            <div class="col-md-3">
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="donation-4" data-toggle="modal" data-target="#addDonationModal">
                        Change Donation Information
                    </button>
                <?php
                }

                $donationInfo = getDonationInfo('donation-4', $conn);
                $row = $donationInfo->fetch_assoc();
                ?>
                <h3><?php echo $row['first']; ?></h3>
                <h5><?php echo $row['second']; ?></h5>
                <h4><?php echo $row['third']; ?></h4>
                <h6><?php echo $row['forth']; ?></h6>
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
                            <button class="btn btn-block btn-primary" data-position-id="landing-2" data-toggle="modal" data-target="#addContentModal">
                                Change
                            </button>
                        <?php
                        }

                        $content = getContent('landing-2', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                        <h3><?php echo $row['title']; ?></h3>

                        <p><?php echo $row['content']; ?></p>
                        </div>

                        <div class="left"><a href="">more</a></div class="left">
                    </div>

                    <div class="col-md-4">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <button class="btn btn-block btn-primary" data-position-id="landing-3" data-toggle="modal" data-target="#addContentModal">
                                Change
                            </button>
                        <?php
                        }

                        $content = getContent('landing-3', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                            <h3><?php echo $row['title']; ?></h3>

                            <p><?php echo $row['content']; ?></p>
                        </div>

                        <div class="left"><a href="">more</a></div class="left">
                    </div>

                    <div class="col-md-4">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <button class="btn btn-block btn-primary" data-position-id="landing-4" data-toggle="modal" data-target="#addContentModal">
                                Change
                            </button>
                        <?php
                        }

                        $content = getContent('landing-4', $conn);
                        $row = $content->fetch_assoc();
                        ?>
                        <div class="goal-content">
                            <h3><?php echo $row['title']; ?></h3>

                            <p><?php echo $row['content']; ?></p>
                        </div>

                        <div class="left"><a href="">more</a></div class="left">
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
                        <button class="btn btn-block btn-primary" data-position-id="landing-5" data-toggle="modal" data-target="#addContentModal">
                            Change Content
                        </button>
                    <?php
                    }

                    $content = getContent('landing-5', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <h3><?php echo $row['title']; ?></h3>
                    <br/><br/>

                   <p><?php echo $row['content']; ?></p>
                </div>
                <div class="col-md-5 videos">
                    <div class="center" style="max-height: 220px; max-width: 400px;">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <button class="btn btn-block btn-primary" data-position-id="video-1" data-toggle="modal" data-target="#addVideoModal">
                                Change Video
                            </button>
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
                            <button style="z-index: 100;" class="btn btn-block btn-primary" data-position-id="video-2" data-toggle="modal" data-target="#addVideoModal">
                                Change Video
                            </button>
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

        <div class="row support">
            <div class="container">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <button class="btn btn-block btn-primary" data-position-id="landing-6" data-toggle="modal" data-target="#addContentModal">
                            Change
                        </button>
                    <?php
                    }

                    $content = getContent('landing-6', $conn);
                    $row = $content->fetch_assoc();
                    ?>
                    <h3><?php echo $row['title']; ?></h3>

                   <p><?php echo $row['content']; ?></p>
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
</script>
</body>
</html>