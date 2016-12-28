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
                <button class="btn btn-block btn-primary" data-position-id="nvm" data-toggle="modal" data-target="#changeFileModal">
                    Change file
                </button>
            <?php
            }
            ?>
            <header class="entry-header"><header class="entry-header">
                    <h1 class="entry-title" style="text-align: justify;">Need, Vison, Mission &amp; Goals</h1>
                </header>
                <div class="entry-content">
                    <h3 style="text-align: justify;"><strong>Why do we need Innovation Center in Nepal</strong><strong>?</strong></h3>
                    <p style="text-align: justify;">No developed countries in the world did get to the position they are now without giving topmost priorities for the development of science, technology, and innovation in their countries. Also, nobody can deny the fact that people are the most precious resources for the economic development of a country no matter whether it is a tiny country like Bhutan or a big country like Russia. However, the irony is that no government and political party in the 60 years&acirc;&euro;&trade; history of modern Nepal neither practically cared about tapping the talents of its precious human resources nor gave any priority for the development of science, technology, and innovation in the country. As a result, many Nepali scientists, researchers, and innovative people left the country and are now successfully working in developed countries all over the world.</p>
                    <p style="text-align: justify;">The migration rate of the young Nepali innovative and creative minds has accelerated even more every year. On the other hand, the researchers, scientists, and innovators, who are still living in Nepal, have not been able to work in their capacity because of the lack of inductive environment.</p>
                    <p style="text-align: justify;">If a least developed country like Nepal keeps wasting and losing her creative minds in such a way, it will be very difficult to bring economic prosperity and to uplift Nepal from the list of the least developed countries to a developing country at any time in near future. This is not a sweeping statement but the fact.</p>
                    <p style="text-align: justify;">The only way for keeping the precious human resources and tapping their talents for the economic development of Nepal is to involve the talented people in research and innovation activities. Therefore, there is an urgent need for the establishment of an innovation center to tap the talents and creativity of Nepali youths and scientists, to mentor their innovative ideas and help them to develop products and services for sale in the national and international market.</p>
                    <p style="text-align: justify;">This is the best ways to uplift Nepal from a &acirc;&euro;&oelig;beggar&acirc;&euro; country to a developed country in the coming decades. As of now Nepal is one of the least developed countries and National Planning Commission of Nepal Government recently has made a vision to uplift Nepal to a developing country by 2022.</p>
                    <h3 style="text-align: justify;"><strong>What are the vision and goals of the Innovation Center?</strong></h3>
                    <p style="text-align: justify;">The single vision of the proposed innovation center is to tap the talents and creativity of innovative people and scientists in Nepal, who will otherwise be &acirc;&euro;&oelig;drained&acirc;&euro; to developed countries if no initiative is taken. The goal of the center will be as follows.</p>
                    <ol>
                        <li style="text-align: justify;">Utilize rich natural resources of Nepal including construction and operation of hydropower projects in an environment-friendly way to generate sustainable financial resources for the management and operation of National Innovation Center.</li>
                        <li style="text-align: justify;">Support transformation of Nepal into a developed nation by creating job opportunities in different national development sectors and by achieving prosperity through science, technology, and new innovations.</li>
                        <li style="text-align: justify;">Create a conducive environment to attract capable, innovative, research-oriented, and renowned human resources from different fields living in or outside Nepal to use innovation to achieve prosperity through economic, social, and environmental development.</li>
                        <li style="text-align: justify;">Provide opportunities in Nepal to innovative and intellectual talents of the country and create incentives for them not to migrate to foreign countries.</li>
                        <li style="text-align: justify;">Create a database of innovative knowledge and innovative personalities of Nepal.</li>
                        <li style="text-align: justify;">Support practical application of knowledge-based and invented technologies.</li>
                        <li style="text-align: justify;">Facilitate for the promotion and commercialization of the innovations.</li>
                        <li style="text-align: justify;">Assist for the registration of intellectual property and in seeking seed money investment for innovations.</li>
                        <li style="text-align: justify;">Identify and develop potential human resources for capacity building required for the development of the country in the fields such as management, arts, literature and, science and technology.</li>
                        <li style="text-align: justify;">Expand the usage of new technology through the transfer of technology.</li>
                        <li style="text-align: justify;">Assist government in policy formulation by doing study and research in the field of natural resources and the environment.</li>
                        <li style="text-align: justify;">Organize conferences on technology, competitions on technology and reward excellence.</li>
                        <li style="text-align: justify;">Encourage innovators to use information technology as far as it is possible for their work.</li>
                        <li style="text-align: justify;">Help twinning of educational institutions and business communities for cooperation for the economic development of Nepal.</li>
                        <li style="text-align: justify;">Have partnership and cooperate with national and international organizations and institutions with similar objectives.</li>
                        <li style="text-align: justify;">Support to and cooperate with the Government of Nepal on aforementioned similar policy and programs</li>
                    </ol>
                </div>
            </header>
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
