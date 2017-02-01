<?php

include '../config/dbConnect.php';
include '../service/common.php';

if(isset($_FILES["uploadFile"]["tmp_name"])){

//    $file = $_FILES["file"]["tmp_name"];
    $medium = strip_tags($_POST['med']);

    if(filesize($_FILES["uploadFile"]["tmp_name"]) > 0){
        $allowedTypes = array('xls', 'xlsx');
        $detectedType = pathinfo($_FILES['uploadFile']['name'],PATHINFO_EXTENSION);
        if(in_array($detectedType, $allowedTypes)){

            $file = $_FILES["uploadFile"]["tmp_name"];

//            excel code


            $data = array();

            try{
                include '../Classes/PHPExcel/IOFactory.php';

                $objPHPExcel = PHPExcel_IOFactory::load("$file");
            }catch (Exception $e) {
                die('Error loading file "' . pathinfo($file, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }

            $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);


            $arrayCount = count($allDataInSheet);

            for($i = 3; $i <= $arrayCount; $i++){
                $receivedDate = trim($allDataInSheet[$i]['B']);
                $name = trim($allDataInSheet[$i]['C']);
                $amount = trim($allDataInSheet[$i]['D']);
                $address = trim($allDataInSheet[$i]['E']);


//                echo $amount.'</br>';
                addDonor($name, $amount, $receivedDate, $medium, $address, $conn);

            }

//            return $data;



//            end of excel code
            fclose($file);


            $path = base64_encode("id=$medium");
            header("Location: ../view/donorsList.php?$path");

        }
    }else{
        echo 'file is empty';
    }

}else{
    echo "not done";
}