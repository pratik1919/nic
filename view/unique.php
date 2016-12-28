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
                <button class="btn btn-block btn-primary" data-position-id="unique" data-toggle="modal" data-target="#changeFileModal">
                    Change file
                </button>
            <?php
            }
            ?>

            <header class="entry-header"><header class="entry-header"><header class="entry-header">
                        <h1 class="entry-title" style="text-align: justify;">Uniqueness &amp; Sustainability</h1>
                    </header>
                    <div class="entry-content">
                        <p style="text-align: justify;">In Nepali context, the innovation center must be a fully autonomous and should be run by visionary people. If we rely upon the government grant, the bad thing that will definitely happen in Nepal is the political interferences from the political parties and bureaucratic hindrances as it is happening these days so badly. Such interferences and hindrances will not make the innovation center run autonomously, efficiently and productively. The government&acirc;&euro;&trade;s support is necessary to get a soft loan, to get hydropower survey license, and to get Power Purchase Agreement (PPA) done. Nepal Government can also provide one-time grant to pay for the equity if it deems necessary or put 30% share in the proposed hydropower project.</p>
                        <p style="text-align: justify;">Thus, the wisest steps in Nepal at the present situation to start a small but very productive innovation center and make it sustainable will be to start a project that can bring cash income on a regular basis and make the center sustainable.</p>
                        <p style="text-align: justify;"><strong><u>What is the Idea to Make Innovation Center Sustainable?</u></strong></p>
                        <p style="text-align: justify;">Nepal is the second richest country in the world in term of hydropower resource. Therefore, it has been concluded that the most feasible means to generate financial resource in Nepal is to build a hydropower station and sell the power to the government-owned grid line. Compared to other sources, the hydropower is the most reliable, stable and predictable source of income than any other sources for the proposed innovation center. If we build a 10 MW hydropower station and sell the power to Nepal Electricity Authority, it will bring enough money to set up the innovation center and run it. Nepal Electricity Authority owned by the government will buy the power through power purchase agreement (PPA). We have expertise in Nepal for building the hydropower station and manage it, therefore, there is no need to bring experts from abroad.</p>
                        <p style="text-align: justify;">The following revenue calculation roughly shows how an innovation center will be self-sustained.&Acirc;&nbsp; The revenues calculation is based upon the recent power purchase rate of Nepal Electricity Authority. The power purchase rate changes over time and is different according to dry and wet season.</p>
                        <ul style="text-align: justify;">
                            <li>Gross Income in 4 months from 10 MW (10,000 KW) during the dry season:</li>
                        </ul>
                        <p style="text-align: justify;">Income per day: 10,000KW x US$0.097 x 24 hour = US$23,280</p>
                        <p style="text-align: justify;">Income in four Months (120 days): US$23,280x 120 days = US$2,793,600</p>
                        <ul style="text-align: justify;">
                            <li>Gross Income in 8 months from 10 MW (10,000 KW) during the wet season:</li>
                        </ul>
                        <p style="text-align: justify;">Income per day: 10,000KW x US$0.056 x 24 hours= US$13,440</p>
                        <p style="text-align: justify;">Income in 8 Months (240 days): US$13,440 x 240 days = US$3,225,600</p>
                        <p style="text-align: justify;">&Acirc;&bull; Total Gross Income a Year =&Acirc;&nbsp;&Acirc;&nbsp; US$2,793,600 + US$3,225,600 = US$6,019,200</p>
                        <p style="text-align: justify;">There are different factors and hidden costs that will reduce the gross income. According to the hydro power experts, the approximate net income will be about 70% of the estimated total gross income.</p>
                        <p style="text-align: justify;">Thus Approximate Net Income per year from 10 MW hydropower = 70% of US$6,019,200 = <u>US$4,213,440</u></p>
                        <p style="text-align: justify;">There will be operation and maintenance cost to make the hydro station run smoothly. Also, it is necessary to pay the principal and the annual interests of the loan taken to build the hydropower station. The tentative plan is to use 80% of the net income to pay for loan, interest, operation and maintenance cost and use 20% of the net income to establish and to run the innovation center as follows.</p>
                        <p style="text-align: justify;">Amount that will be used to pay for loan, operation and maintenance = 75% of US$4,213,440 = US$3,160,080</p>
                        <p style="text-align: justify;">The amount that will be available each year for the innovation center = 25% of US$4,213,440 = <u>US$1,053,360</u></p>
                        <p style="text-align: justify;">We prepared the rough estimate given above just to make our concept of making the center sustained. It is estimated that the loan will be paid off in seven or eight years. After the loan is paid off, about 30% of the net income will be required for operation and maintenance cost, and 20% will be kept for future development. Therefore 50% of net income, which is approx. $2,000,000 will still be available per year to run the innovation center. &Acirc;&nbsp;This is how the innovation center will be financially self-supportive.</p>
                    </div>
                </header></header>
        </div>
    </div>


<div id="footer">
    <?php
    include '_footer.php';
    ?>
</div>
<!-- #footer -->
</div>

<script>
    $('#changeFileModal').on('show.bs.modal', function(e){
        var positionId = $(e.relatedTarget).data('position-id');
        $(e.currentTarget).find('input[name="positionId"]').val(positionId);

    });
</script>
</body>
</html>