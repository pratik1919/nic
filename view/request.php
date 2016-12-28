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

            <?php
            if (isset($_SESSION['userID'])) {
                ?>
                <button class="btn btn-block btn-primary" data-position-id="request" data-toggle="modal" data-target="#changeFileModal">
                    Change file
                </button>
            <?php
            }
            ?>

            <header class="entry-header"><header class="entry-header"><header class="entry-header"><header class="entry-header">
                            <h1 class="entry-title" style="text-align: justify;">Our Requests</h1>
                        </header>
                        <div class="entry-content">
                            <p style="text-align: justify;">We are seeking support for initial investment from the government or interested groups or individuals. We have requested the government of Nepal for one time grant of USD 4 million that will be used for building the 10 MW hydro power station. The approximate cost for building 10 MW hydro power is US$15 million and we need 30% of that as an equity and 70% of the total cost will be taken as loan from commercial banks. However, the government has not given priority to our request. We are also requesting individual donors for donation.</p>
                            <p style="text-align: justify;">It is not only financial support we are looking for. We are also looking for ideas for starting innovation center or for &nbsp;raising funds. Moreover we are looking for partners interested to help Nepal become a developed country through innovation.</p>
                            <p style="text-align: justify;">It is very much surprising fact that most of the donor countries or agencies, despite contributing billions of dollars over many years of time for the overall development of Nepal, did not see the need of establishing an innovation center to help Nepal keep its creative and innovative human resources for the development of Nepal. It may be because the government of Nepal did not approach the donor countries or agencies for help to build innovation centers for the development of science and technology in Nepal.</p>
                            <p style="text-align: justify;">Therefore, donor agencies are also welcomed very much to participate in the new endeavor and contribute to making the concept of the autonomous innovation center work in Nepal. Such support from the donor countries will certainly help Nepal to take its first step towards becoming a developing country and then to a developed country.</p>
                            <p style="text-align: justify;">If you are interested to participate in this campaign, please fill up the form and submit. We will contact you and tell you how you can send your contribution.</p>
                        </div>
                    </header></header></header>
        </div>
    </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</body>


<script>
    $('#changeFileModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });
</script>
</html>
