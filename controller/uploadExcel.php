<?php

include '../config/dbConnect.php';

if(isset($_FILES["uploadFile"]["tmp_name"])){

//    $file = $_FILES["file"]["tmp_name"];

    if(filesize($_FILES["uploadFile"]["tmp_name"]) > 0){
        $allowedTypes = array('xls', 'xlsx');
        $detectedType = pathinfo($_FILES['uploadFile']['name'],PATHINFO_EXTENSION);
        if(in_array($detectedType, $allowedTypes)){

            $file = fopen($_FILES["uploadFile"]["tmp_name"], "r");
            while (($value = fgetcsv($file, 10000, ",")) !== FALSE)
            {
                echo $value[1];
            }
            fclose($file);

        }
    }else{
        echo 'file is empty';
    }

}else{
    echo "bitch";
}