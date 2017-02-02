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
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="../jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../jquery-ui-1.12.1.custom/jquery-ui.min.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>


    <script>
        $(function () {

            $( "#datetime-local" ).datepicker({
                minDate: 0
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
        $e = getEvents($conn);
        ?>
    </div>
    <!-- #header -->
    <div id="content">
        <div class="container">

            <!--    add event model-->
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
                                    <label for="">Language: </label>
                                    <select class="form-control " name="lang" id="">
                                        <?php
                                        if(isset($_SESSION["lang"])){
                                            $lang = $_SESSION["lang"];
                                            if($lang == "en"){
                                                echo '<option value="en" selected>English</option>';
                                                echo '<option value="ne">Nepali</option>';
                                            }else{
                                                echo '<option value="ne">Nepali</option>';
                                                echo '<option value="en">English</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Event Title</label>
                                    <input class="form-control" type="text" name="title"  required=""/>
                                </div>

                                <div class="form-group">
                                    <label for="">Date</label>
                                    <input id="datetime-local" class="form-control" type="text" name="date" required=""/>
                                </div>
                                <div class="form-group">
                                    <label for="">Time</label>
                                    <input  class="form-control" type="time" name="time" required=""/>
                                </div>

                                <div class="form-group">
                                    <label for="">Venue</label>
                                    <input class="form-control" type="text" name="venue" required=""/>
                                </div>

                                <div class="form-group">
                                    <label for="">Description</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10" width="100%" required=""></textarea>
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
            if($e->num_rows > 0 || isset($_SESSION['userID'])){
            ?>
            <?php
            if (isset($_SESSION['userID'])) {
                ?>
                <div class="addDiv">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addEventsModal"><span class=" glyphicon glyphicon-plus"></span>
                    Add event
                </button>
                </div>
            <?php
            }

            $e = getEvents($conn);
            while($event = $e->fetch_assoc()){
                ?>
            <div class="col-lg-3">

                <div class="event small-news" id="<?php echo $event['id']; ?>" onclick="submitForm(this);">
                    <?php
                    if (isset($_SESSION['userID'])) {
                        ?>
                        <div class="option">
                            <a href="../controller/deleteEvents.php?id=<?php echo $event['id'] ?>" class="btn btn-default glyphicon glyphicon-trash"/></a>
                            <a href="../controller/editEvents.php?id=<?php echo $event['id'] ?>" class="btn btn-default glyphicon glyphicon-pencil"/></a>
                        </div>

                        <?php
                    }
                    ?>
                    <h3><?php echo $event['title']; ?></h3>
                    <h5 style="text-align: start;"><?php echo $event['date']; ?>
                        <span class="pull-right" ">
                        <?php echo $event['time']; ?></span></h5>
                    <h5><b><?php echo $event['venu']; ?></b></h5>
                    <hr style="border: 2px solid cyan; margin-top: 0px;">
                    <div style="height: 105px; overflow: hidden;">
                    <p><?php echo $event['description']; ?></p>
                    </div>
                </div>

            </div>
            <?php
            }
            ?>

        </div>
    </div>
    <?php
    }else{
        ?>
        <h2>No current upcoming events</h2>
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
        function submitForm(item){
            var pos = $(item).attr("id");
            document.getElementById('positionId').value = pos;
            var id = '#read';
            $(id).submit();
        }
    </script>
</body>
</html>
