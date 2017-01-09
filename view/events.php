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

            <!--    donation info model-->
            <div id="addEventsModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Upcoming Events</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form" action="../controller/c_addevents.php" method="post" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="">Event Title</label>
                                    <input class="form-control" type="text" name="title"/>
                                </div>

                                <div class="form-group">
                                    <label for="">Date - Time</label>
                                    <input class="form-control" type="datetime-local" name="date"/>
                                </div>

                                <div class="form-group">
                                    <label for="">Venue</label>
                                    <input class="form-control" type="text" name="venue"/>
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10" width="100%"></textarea>
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


            <form action="read.php" id="read" method="post">
                <input type="hidden" id="positionId" name="positionId"/>
                <input type="hidden" value="event" name="content"/>
            </form>


            <?php
            if (isset($_SESSION['userID'])) {
                ?>
                <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#addEventsModal">
                    Add event
                </button>
            <?php
            }

            $e = getEvents($conn);
            while($event = $e->fetch_assoc()){
                ?>
            <div class="col-lg-3">
                <div class="thumbnail small-news" id="<?php echo $event['id']; ?>" onclick="submitForm(this);">
                    <h3><?php echo $event['title']; ?></h3>
                    <h5><?php echo $event['date']; ?></h5>
                    <h5><?php echo $event['venu']; ?></h5>
                    <p><?php echo $event['description']; ?></p>
                </div>
            </div>
            <?php
            }
            ?>


        </div>
    </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->

    <script>
        function submitForm(item){
            var pos = $(item).attr("id");
            document.getElementById('positionId').value = pos;
            var id = '#read';
            $(id).submit();
        }
    </script>

</body>
</html>
