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
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.min.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>

    <script>
        $(function () {

            $( "#news-date" ).datepicker({
                maxDate: 0
            });
        });
    </script>

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
        <?php
        include '_header.php';

        $news = News($conn);
        ?>
    </div>
    <!-- #header -->


    <div id="content" class="container">



        <form action="read.php" id="read" method="post">
            <input type="hidden" id="positionId" name="positionId"/>
            <input type="hidden" value="news" name="content"/>
        </form>

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
                                <input id="news-date" class="form-control" type="text" name="date" required=""/>
                            </div>

                            <div class="form-group">
                                <label for="">Content</label><br/>
                                <textarea style="width: 100%;white-space: pre-wrap;" name="news" id="" cols="30" rows="10"
                                          required=""></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Photo</label><br/>
                                <input type="file" name="photo" required/>
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

        <?php
        if($news->num_rows > 0 || isset($_SESSION['userID'])){
        ?>

        <div class="row">
            <div class="col-md-3">
                <?php
                $news = getNews(1, $conn);
                $row = $news->fetch_assoc();
                ?>
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="1" data-toggle="modal" data-target="#addNewsModal">
                        Change News
                    </button>
                <?php
                }
                ?>
                <div class="small-news">


                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')" id="1" onclick="submitForm(this)">
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>

                </div>
</div>

                <?php
                $news = getNews(2, $conn);
                $row = $news->fetch_assoc();
                ?>
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="2" data-toggle="modal" data-target="#addNewsModal">
                        Change News
                    </button>
                <?php
                }
                ?>

                <div class="small-news">
                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')" id="2" onclick="submitForm(this)">
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-md-6">
                <?php
                $news = getNews(3, $conn);
                $row = $news->fetch_assoc();
                ?>
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="3" data-toggle="modal" data-target="#addNewsModal">
                        Change News
                    </button>
                <?php
                }
                ?>
                <div class="small-news">
                <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>'); height: 610px;" id="3" onclick="submitForm(this)">
                    <div class="news-content">
                        <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                        <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                    </div>

                </div>
            </div>
                </div>
            <div class="col-md-3">
                <?php
                $news = getNews(4, $conn);
                $row = $news->fetch_assoc();
                ?>
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="4" data-toggle="modal" data-target="#addNewsModal">
                        Change News
                    </button>
                <?php
                }
                ?>
                <div class="small-news">

                    <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')" id="4" onclick="submitForm(this)">

                        <div class="news-content">
                            <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                            <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                        </div>

                    </div>
                </div>
                <?php
                $news = getNews(5, $conn);
                $row = $news->fetch_assoc();
                ?>
                <?php
                if (isset($_SESSION['userID'])) {
                    ?>
                    <button class="btn btn-block btn-primary" data-position-id="5" data-toggle="modal" data-target="#addNewsModal">
                        Change News
                    </button>
                <?php
                }
                ?>
                <div class="small-news">


                    <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')" id="5" onclick="submitForm(this)">

                        <div class="news-content">
                            <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                            <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <?php
    }else{
            ?>
        <h2>News are being uploaded</h2>
    <?php
    }
    ?>

    <div style="height: 50px;"> </div>
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

        function submitForm(item){
           var pos = $(item).attr("id");
            document.getElementById('positionId').value = pos;
            var id = '#read';
            $(id).submit();
        }
    </script>
</body>
</html>

