<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:02 PM
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

<div class="gradient" id="wrapper">

    <div id="header" class="row">
        <?php include '_header.php'; ?>
    </div>
    <!-- #header -->

<!--    add donor model-->
    <div id="addDonorModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Donor</h4>
                </div>
                <div class="modal-body">
                    <form class="form" action="../controller/c_addDonor.php" method="post">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" type="text" name="name" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="">Amount</label>
                            <input class="form-control" type="number" name="amount" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="">Medium</label>
                            <input class="form-control" type="text" name="medium" required=""/>
                        </div>

                        <div class="form-group">
                            <label for="">Donation Date</label>
                            <input class="form-control" type="date" name="date" required=""/>
                        </div>

                        <input type="submit" value="Add" class="btn btn-primary btn-block"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <div id="content" class="container">

        <?php
        if(isset($_SESSION['userID'])){
            ?>
            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#addDonorModal">Add Donors</button>
        <?php
        }
        ?>

        <div class="row" style="margin-bottom: 50px;">
            <div class="col-md-1"></div>
            <div class="col-md-4 center">
                <h1 class="thank">Thank You</h1>
                <h1 class="donor">Donors</h1>
            </div>
            <div class="col-md-7">
                <div class="thankNote">
                    WE want to express our appreciation for your generosity in support of National Innovation Center. Your personal commitment was incredibly helpful and allowed us to reach our goal. Your assistance means so much to us and even more to National Innovation center.
                    Thank you from all of us.
                    <hr/>
                </div>
            </div>
        </div>
<!---->
<!--        <div class="row">-->
<!---->
<!--            यदि तपाई पनि यस् महादान अभियानलाई सहयोग गर्न चाहनुहुन्छ भने, निम्न अनुसार सहयोग गर्न सक्नु हुने छ !-->
<!---->
<!--            1. राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 00100105201853, एभरेष्ट बैङ्क, नयाँ बानेश्वर शाखा काठमाडौँ Swift Code – EVBLNPKA-->
<!--            2. राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 01906322060017, हिमालायन बैङ्क , ठमेल शाखा,काठमाडौँ Swift Code – HIMANPKA-->
<!--            3. नेपालमा eSewa Nepalको माध्यमबाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन चाहनु हुन्छ भने यहाँ Click गर्नुहोस् – www.nicnepal.org/donation-->
<!--            4. बिदेशमा रहनु हुनेहरुले gofundme.com बाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन यहाँ Click गर्नुहोस् – www.gofundme.com/nic-nepal-->
<!--            आर्थिक सहयोग गर्ने चाहनेहरूले यी बैङ्कहरूमा नगद जम्मा गरेर भौचरको फोटो nicnepal.mahabir@gmail.com मा पठाउनु होला अथवा 9841592361 मा महाबीर पुन लाइ फोन गर्नुस ।-->
<!--        </div>-->




        <div class="container">
            <?php
            $donor = getDonor($conn);

            $i = 1;
            while($row = $donor->fetch_assoc()){
                ?>
            <div class="col-md-4 donorList">
                <h2>Rs <?php echo $row['amount']; ?>/-</h2>
                <h3><?php echo $row['name']; ?></h3>
                <h4><?php echo $row['date']; ?></h4>
                <h4><?php echo $row['medium']; ?></h4>
            </div>

                <?php
                $i++;
            }
            ?>
        </div>

<!---->
<!--        <table class="table table-striped table-responsive">-->
<!--            <thead>-->
<!--            <th>S/N</th>-->
<!--            <th>Name</th>-->
<!--            <th>Amount</th>-->
<!--            <th>Through</th>-->
<!--            <th>Date</th>-->
<!--            </thead>-->
<!---->
<!--            --><?php
//            $donor = getDonor($conn);
//
//            $i = 1;
//            while($row = $donor->fetch_assoc()){
//                ?>
<!--                <tr>-->
<!--                    <td>--><?php //echo $i; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['name']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['amount']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['medium']; ?><!--</td>-->
<!--                    <td>--><?php //echo $row['date']; ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php
//                $i++;
//            }
//            ?>
<!--        </table>-->

        <hr/>
<div class="row donationInfo">
        यदि तपाई पनि यस् महादान अभियानलाई सहयोग गर्न चाहनुहुन्छ भने, निम्न अनुसार सहयोग गर्न सक्नु हुने छ!
    <br/>
    <ol>
        <li>राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 00100105201853, एभरेष्ट बैङ्क, नयाँ बानेश्वर शाखा काठमाडौँ Swift Code – EVBLNPKA</li>
        <li>राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 01906322060017, हिमालायन बैङ्क , ठमेल शाखा,काठमाडौँ Swift Code – HIMANPKA</li>
        <li>नेपालमा eSewa Nepal को माध्यमबाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन चाहनु हुन्छ भने यहाँ Click गर्नुहोस्< – www.nicnepal.org/donation</li>
        <li>बिदेशमा रहनु हुनेहरुले gofundme.com बाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन यहाँ Click गर्नुहोस<a href="https://www.gofundme.com/nic-nepal"> –  www.gofundme.com/nic-nepal
            </a> आर्थिक सहयोग गर्ने चाहनेहरूले यी बैङ्कहरूमा नगद जम्मा गरेर भौचरको फोटो nicnepal.mahabir@gmail.com मा पठाउनु होला अथवा 9841592361 मा महाबीर पुन लाइ फोन गर्नुस ।</li>
    </ol>

</div>
    </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>
</body>
</html>