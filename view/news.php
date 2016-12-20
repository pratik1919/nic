<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:02 PM
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


    <div id="content" class="container">

        <!--    add news model-->
        <div id="addNewsModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add News</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form" action="../controller/c_addNews.php" method="post" enctype="multipart/form-data">

                            <input type="hidden" name="positionId"/>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input class="form-control" type="text" name="title" required=""/>
                            </div>

                            <div class="form-group">
                                <label for="">Date</label>
                                <input class="form-control" type="date" name="date" required=""/>
                            </div>

                            <div class="form-group">
                                <label for="">Content</label><br/>
                                <textarea style="width: 100%;" name="news" id="" cols="30" rows="10"
                                          required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label><br/>
                                <input type="file" name="photo"/>
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

        <div class="row">
            <div class="col-md-3">

                <?php
                $news = getNews(1, $conn);
                $row = $news->fetch_assoc();
                ?>

                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <button class="btn btn-block btn-primary" data-position-id="1" data-toggle="modal" data-target="#addNewsModal">
                            Change News
                        </button>
                    <?php
                    }
                    ?>
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>

                </div>

                <?php
                $news = getNews(2, $conn);
                $row = $news->fetch_assoc();
                ?>

                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <button class="btn btn-block btn-primary" data-position-id="2" data-toggle="modal" data-target="#addNewsModal">
                            Change News
                        </button>
                    <?php
                    }
                    ?>
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <?php
                $news = getNews(3, $conn);
                $row = $news->fetch_assoc();
                ?>

                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>'); height: 610px;">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <button class="btn btn-block btn-primary" data-position-id="3" data-toggle="modal" data-target="#addNewsModal">
                            Change News
                        </button>
                    <?php
                    }
                    ?>
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="small-news">
                    <?php
                    $news = getNews(4, $conn);
                    $row = $news->fetch_assoc();
                    ?>

                    <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <button class="btn btn-block btn-primary" data-position-id="4" data-toggle="modal" data-target="#addNewsModal">
                                Change News
                            </button>
                        <?php
                        }
                        ?>
                        <div class="news-content">
                            <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                            <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                        </div>

                    </div>
                </div>
                <div class="small-news">
                    <?php
                    $news = getNews(5, $conn);
                    $row = $news->fetch_assoc();
                    ?>

                    <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')">
                        <?php
                        if (isset($_SESSION['userID'])) {
                            ?>
                            <button class="btn btn-block btn-primary" data-position-id="5" data-toggle="modal" data-target="#addNewsModal">
                                Change News
                            </button>
                        <?php
                        }
                        ?>
                        <div class="news-content">
                            <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                            <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>


    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->


    <script>
        $('#addNewsModal').on('show.bs.modal', function(e){
            var positionId = $(e.relatedTarget).data('position-id');
            $(e.currentTarget).find('input[name="positionId"]').val(positionId);

        });
    </script>
</body>
</html>
