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
        <div class="col-md-4">
            <div class="fb-page" data-href="https://www.facebook.com/mahabirnwp/" height="400" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            </div>
        </div>

        <div class="col-md-4">
            <h3>सम्पर्क ठेगाना</h3>

            <p>शिव भक्त मार्ग - ३०४,लाजिम्पाट   ,<br/>
                काठमाडौँ, नेपाल, <br/> फोन +९७७ ४४२ ८०९० वा +९७७ ९८४१५९२३६१
                <br/>  Shivabhakta Marg 304, <br/> Lazimpat, Kathmandu Nepal
                <br/>  Phone: +977 442 8090 or +977 9841592361
                <br/> थप जानकारीका लागि महाबीर पुन लाई इमेल गर्नु होस् ( Write email to Dr. Mahabir Pun for further
                information: ) <br/>
                nicnepal.mahabir@gmail.com
                <br/>
            <h3>Newsletter</h3>
            https://t.co/mPrMRxIlpv
            </p>
        </div>

        <div class="col-md-4">
            <h3>Contact Us <br/> ( सम्पर्क गर्नु होस् )</h3>

            <form class="form" action="">
                <div class="form-group">
                    <label>तपाईको नाम ( Name ) (*)</label>
                    <input class="form-control" type="text" name="name"/>
                </div>
                <div class="form-group">
                    <label>तपाईको इमेल ( Email ) (*)</label>
                    <input class="form-control" type="text" name="email"/>
                </div>
                <div class="form-group">
                    <label>तपाईको संदेश ( Message )</label>
                    <textarea class="form-control" type="text" name="message"></textarea>
                </div>
                <input type="submit" value="Send" class="btn btn-block btn-success"/>
            </form>
        </div>
    </div>
</div>
<div class="last-foot">
    <h5>Copyright © <?php echo date("o"); ?> National Innovation Center Nepal</h5>
</div>