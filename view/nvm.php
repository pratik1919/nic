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

            <?php
            if (isset($_SESSION['userID'])) {
                ?>
                <button class="btn btn-block btn-primary" data-position-id="nvm" data-toggle="modal" data-target="#changeFileModal">
                    Change file
                </button>
            <?php
            }

            $f = getContent('nvm', $conn);
            $row = $f->fetch_assoc();
            $content = $row['ne'];

            //            $file1 = "nic/uploads/$content";
            //            header('Content-type: application/pdf');
            //            header('Content-Disposition: inline; filename="' . $file1. '"');
            //            header('Content-Transfer-Encoding: binary');
            //            header('Accept-Ranges: bytes');
            //            @readfile($file1);
            ?>

            <embed src="../uploads/<?php echo $content; ?>" style="width: 100% !important; height: 1180px; position: relative;"></embed>
        </div>
    </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->

    <script>
        $('#changeFileModal').on('show.bs.modal', function(e){
            alert('adfsd');
            var positionId = $(e.relatedTarget).data('position-id');
            $(e.currentTarget).find('input[name="positionId"]').val(positionId);

        });
    </script>
</body>
</html>
