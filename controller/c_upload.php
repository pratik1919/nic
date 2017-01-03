<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 12/26/2016
 * Time: 12:25 PM
 */

include'../service/common.php';

if(isset($_FILES['file'])){

    $pos = $_POST['positionId'];
//    echo $pos;

    $file = $_FILES['file'];

    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
    $file_error = $file['error'];

    $file_ext = explode('.',$file_name);
    $file_ext = strtolower(end($file_ext));

    $allowed = array('pdf');

    if(in_array($file_ext, $allowed)){
        if($file_error == 0){
                $pos = $_POST['positionId'];
                    $file_name_new = $pos . '.' . $file_ext;
                    $file_dest = '../uploads/' . $file_name_new;
                    if(move_uploaded_file($file_tmp, $file_dest)){
                        addContent('Null', $file_name_new, $pos, $conn);
                        if($pos == 'conceptPaper'){
                            header('Location: ../view/conceptPaper.php');
                        }elseif($pos == 'nvm'){
                            header('Location: ../view/nvm.php');
                        }elseif($pos == 'unique'){
                            header('Location: ../view/unique.php');
                        }elseif($pos == 'request'){
                            header('Location: ../view/request.php');
                        }
                    }

        }
    }

}