<?php
/**
 * Created by PhpStorm.
 * User: Sujan
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
    <script src="../js/jquery-1.7.2.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../bootstrap-3.3.6-dist/css/bootstrap.min.css"/>
    <script src="../js/jquery.noty.packaged.min.js"></script>
    <script src="../js/topRight.js"></script>
    <!--[if lt IE 7]>
    <style type="text/css">
        #wrapper {
            height: 100%;
        }
    </style>

    <![endif]-->
    <?php
    session_start();
    if (isset($_SESSION["emailMessage"])) {
        $message = $_SESSION["emailMessage"];
        $messageType = $_SESSION["messageType"];
        ?>
        <script type="text/javascript">
            $(document).ready(function () {
                noty({
                    text: '<?php echo $message ?>',
                    layout: 'topRight',
                    type: '<?php echo $messageType ?>'
                });
            });
        </script>
        <?php
        unset($_SESSION["emailMessage"]);
    }
    ?>

</head>
<body>

<div id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>
    <!-- #header -->
    <div id="content">
        <div class="container">

            <div class="row">
            <div class="col-lg-8">
                <h1>85°East Summer Internship Program</h1><br>
            </div>
            </div>
            <div class="row" style="text-align: right;">
                <a href="http://www.85degeast.com/" target="_blank"><img src="../img/banner.png" style="position: relative; max-width: 100%;" alt=""></a>
            </div>
            <div class="row">
                <p style="text-align: justify;">
                    <br>
                    Many if not most internships abroad fail to provide the academic and contextual support that

                    is necessary to cultivate real, lasting changes in a student’s understanding of the world and of

                    themselves. While experiencing life abroad can be rewarding and instructive, 85°East <br><br>

                    With your help, 85°East is committed to making Nepal work for Nepalis. Our summer internship

                    program is just one small piece of a large, economically sustainable effort by National

                    Innovation Center Nepal to bring professional expertise, research opportunities, and economic

                    investment into the country. <br><br>

                    College students who are accepted to the 85°East Summer Internship Program will be paired

                    with Nepali teachers, entrepreneurs, or engineers who are involved in ongoing development

                    projects. In addition to their placement, students will also be responsible for attending weekly

                    seminars with our program director to discuss their understanding of the unique, specific

                    challenges that have dogged development work in Nepal for years, as well as how their

                    experience living and working in Nepal has shifted or changed their world view. <br><br>

                    Ideally, everyone will benefit: students get a summer of direct experience working with Nepali

                    entrepreneurs and innovators, their Nepali partners get an outside perspective on the project,

                    and because 100% of our profits will be donated to the National Innovation Center, there is a

                    direct financial investment back into the country. 85°East’s program which includes

                    arrangements for accommodations, meals, and travel, orientation, and seminars provides the

                    academic and social support that they may not find elsewhere.
                </p>
            </div>
        </div>
    </div>
    <div style="height: 50px;"></div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>
</body>
</html>