
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
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>

    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }

        .ss-base-body{
            background-color: #ffffff !important;
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
        <div class="container" style="text-align: center;">
            <?php
            if (isset($_SESSION['userID'])) {
                ?>
                <button class="btn btn-block btn-primary" data-position-id="part_form" data-toggle="modal"
                        data-target="#addVideoModal">
                    Change Form
                </button>
            <?php
            }

            $content = getVideo('part_form', $conn);
            $row = $content->fetch_assoc();
            echo $row['embed_code'];
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
        $('#addVideoModal').on('show.bs.modal', function(e){
            var positionId = $(e.relatedTarget).data('position-id');
            $(e.currentTarget).find('input[name="positionId"]').val(positionId);

        });
    </script>
</body>
</html>
