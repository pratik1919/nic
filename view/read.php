<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 1/2/2017
 * Time: 3:20 PM
 */

$pos = $_POST['positionId'];
$content = $_POST['content'];

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

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>
    <!-- #header -->

    <?php
    if($content == 'news'){
        $c = getNews($pos, $conn);
    }
    if($content == 'event'){
        $c = readEvents($pos, $conn);
    }
    $row = $c->fetch_assoc();
    ?>

    <div id="content" class="container">


        <form action="read.php" id="read" method="post">
            <input type="hidden" id="positionId" name="positionId"/>
            <input type="hidden" value="news" name="content"/>
        </form>

        <div class="row">

            <?php
            if($content == 'news'){
                ?>
                <div class="col-md-4 small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>'); height: 350px;"></div>
            <?php
            }
            ?>

            <div class="col-md-8">
                <h2><?php echo $row['title']; ?></h2>
                <h4><?php echo $row['date']; ?></h4>

                <p><?php echo $row['description']; ?></p>
            </div>
        </div>


        <?php
        if($content == 'news'){
            ?>
            <div class="row" style="margin-top: 25px;">
                <h4 style="text-align: center">Other News</h4>
                <hr/>
                <?php
                for($i=1; $i <= 5; $i++){
                    if($i != $pos){
                        $news = getNews($i, $conn);
                        $row = $news->fetch_assoc();
                        ?>

                        <div class="col-lg-3 small-news" style="padding: 5px;">

                            <div class="small-news" style="background-image: url('../img/<?php echo $row['photo']; ?>')" id="<?php echo $i; ?>" onclick="submitForm(this)">
                                <div class="news-content">
                                    <h4 class="backgroundOverlayBlue"><span style="z-index: 100"><?php echo $row['date']; ?></span></h4>
                                    <p class="backgroundOverlayRed"><span style="z-index: 100"><?php echo $row['title']; ?></span></p>
                                </div>

                            </div>
                        </div>
                    <?php
                    }
                }
                ?>
            </div>


            <div class="row" style="margin-top: 25px;">
                <h4 style="text-align: center">Older News</h4>
                <hr/>

                <table class="table table-responsive table-striped table-hover read-table">
                    <thead>
                    <th>Date</th>
                    <th>Title</th>
                    </thead>
                    <tbody>
                    <?php
                    $oldNews = getOlderNews($conn);
                    while($row = $oldNews->fetch_assoc()){
                        ?>
                        <tr id="<?php echo $row['position_id']; ?>" onclick="submitForm(this)">
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['title']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>


            </div>




        <?php
        }
        ?>



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
