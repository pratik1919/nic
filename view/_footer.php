<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/6/2016
 * Time: 5:12 PM
 */
?>

<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


<div class="row footer">
    <div class="container">
<!--        <div class="col-md-4">-->
<!--            <div class="fb-page" data-href="https://www.facebook.com/mahabirnwp/" height="400" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">-->
<!--            </div>-->
<!--        </div>-->

        <div class="col-md-4">
            <?php
            if($_SESSION['lang'] == 'en'){
                ?>
            <h3>Contact Info</h3>
                <p>
                <br/><span class="glyphicon glyphicon-home"></span> Shivabhakta Marg 304, Lazimpat, Kathmandu Nepal <br>
                <br/><span class="glyphicon glyphicon-phone"></span> Phone: +977 442 8090 or +977 9841592361 <br>
                    <br/><span class="glyphicon glyphicon-info-sign"></span> Write email to Dr. Mahabir Pun for further
                    information: <br><br>

            <?php
            }else{
                ?>
            <h3>सम्पर्क ठेगाना</h3><br>

            <p><span class="glyphicon glyphicon-home"></span> शिव भक्त मार्ग - ३०४,लाजिम्पाट ,
                काठमाडौँ, नेपाल. <br/><br>
                <span class="glyphicon glyphicon-phone"></span> फोन +९७७ ४४२ ८०९० वा +९७७ ९८४१५९२३६१ <br>

                <br/><span class="glyphicon glyphicon-info-sign"></span> थप जानकारीका लागि महाबीर पुन लाई इमेल गर्नु होस् <br/><br>
            <?php
            }
            ?>

                <span class="glyphicon glyphicon-envelope"></span> nicnepal.mahabir@gmail.com

            <h3>Newsletter</h3>
            https://t.co/mPrMRxIlpv
            </p>
        </div>

        <div class="col-md-8">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.9167479162234!2d85.32276965373359!3d27.722036795758285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1910bccf84a5%3A0x6810677f1c5a1da9!2sShivabhakta+Marg%2C+Kathmandu+44600!5e0!3m2!1sen!2snp!4v1484823721355" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>
<div class="last-foot">
    <h5>Copyright © <?php echo date("o"); ?> National Innovation Center Nepal</h5>
</div>