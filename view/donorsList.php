<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/7/2016
 * Time: 1:02 PM
 */
session_start();

$queryString = $_SERVER['QUERY_STRING'];
//echo $queryString."<br>";
$dQueryString = base64_decode($queryString);
$splitedQS = explode("=",$dQueryString);
//echo $splitedQS[0];
$med = $splitedQS[1];
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>National Innovation Center</title>
    <link rel="icon" href="../img/logo.png" type="image/png" sizes="16x16">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!--    <script src="../js/jquery.dataTables.min.js"></script>-->
    <script src="../bootstrap-3.3.6-dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="application/javascript" src="../js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css"/>
<!--    <link rel="stylesheet" href="../css/dataTables.bootstrap4.css">-->
<!--    <link rel="stylesheet" href="../css/jquery.mobile-1.4.5.min.css">-->

    <link rel="stylesheet" href="maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">



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

                    <form action="../controller/uploadExcel.php" method="post" enctype='multipart/form-data'>
                        <input type="hidden" name="med" value="<?php echo $med; ?>">
                        <div class="form-group">
                            <label for="">Medium:</label>
                        <select name="med" class="form-control">
                            <option value="everest">Everest Bank Ltd</option>
                            <option value="himalayan">Himalayan Bank Ltd</option>
                            <option value="eSewa">eSewa</option>
                            <option value="gofundme">gofundme.com</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="">Upload Excel File: </label>
                            <input type="file" name="uploadFile" required=""/>
                        </div>
                        <div class="addDiv">
                            <input class="btn btn-primary btn-block" type="submit"/>
                        </div>

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
        if (isset($_SESSION['userID'])) {
            $file = "template_donorInfo.xlsx";
            ?>

            <div class="addDiv">
                <a class="btn btn-primary" href='../controller/fileDownload.php'><span class="glyphicon glyphicon-download-alt"></span> Download Template</a>
            <button class="btn btn-primary" data-toggle="modal" data-target="#addDonorModal"><span class="glyphicon glyphicon-plus"></span> Add Donors
            </button></div>

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
                    WE want to express our appreciation for your generosity in support of National Innovation Center.
                    Your personal commitment was incredibly helpful and allowed us to reach our goal. Your assistance
                    means so much to us and even more to National Innovation center.
                    Thank you from all of us.
                    <hr/>
                </div>
            </div>
        </div>
        <?php

        switch ($med) {
            case "himalayan":
                echo "<legend><h2>Donation through Himalayan Bank Ltd.</h2></legend>";
                break;
            case "everest":
                echo "<h2>Donation through Everest Bank Ltd.</h2>";
                break;
            case "eSewa":
                echo "<h2>Donation through eSewa.</h2>";
                break;
            case "gofundme":
                echo "<h2>Donation through gofundme.</h2>";
                break;
        }
        ?>

        <table class="table table-striped table-bordered dt-responsive nowrap" id="donation-table">
            <thead>
            <th>S/N</th>
            <th>Received Date</th>
            <th>Name</th>
            <th>Amount</th>
            <th>Address</th>
            </thead>

            <?php
            $donor = getDonor($med, $conn);

            $i = 1;
            while ($row = $donor->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo ucwords($row['name']); ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>

        <?php
        if($_SESSION['lang'] == 'en'){
            ?>
            <hr/>
            <div class="row donationInfo">
                यदि तपाई पनि यस् महादान अभियानलाई सहयोग गर्न चाहनुहुन्छ भने, निम्न अनुसार सहयोग गर्न सक्नु हुने छ!
                <br/>
                <ol>
                    <li>राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 00100105201853, एभरेष्ट बैङ्क, नयाँ बानेश्वर शाखा काठमाडौँ
                        Swift Code – EVBLNPKA
                    </li>
                    <li>राष्ट्रिय आविष्कार केन्द्र, खाता नम्बर 01906322060017, हिमालायन बैङ्क , ठमेल शाखा,काठमाडौँ Swift
                        Code – HIMANPKA
                    </li>
                    <li>नेपालमा eSewa Nepal को माध्यमबाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन चाहनु हुन्छ भने यहाँ
                        Click गर्नुहोस्< – www.nicnepal.org/donation
                    </li>
                    <li>बिदेशमा रहनु हुनेहरुले gofundme.com बाट राष्ट्रिय आविष्कार केन्द्रको लागि पैसा पठाउन यहाँ Click
                        गर्नुहोस<a href="https://www.gofundme.com/nic-nepal"> – www.gofundme.com/nic-nepal
                        </a> आर्थिक सहयोग गर्ने चाहनेहरूले यी बैङ्कहरूमा नगद जम्मा गरेर भौचरको फोटो
                        nicnepal.mahabir@gmail.com मा पठाउनु होला अथवा 9841592361 मा महाबीर पुन लाइ फोन गर्नुस ।
                    </li>
                </ol>

            </div>
        <?php
        }
        ?>

    </div>

    <script>
        $('#donation-table').dataTable();
    </script>
    <div style="height: 50px;"> </div>

    <div id="footer">
        <?php
        include '_footer.php';
        ?>
    </div>
    <!-- #footer -->
</div>
</body>
</html>