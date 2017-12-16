<?php
/**
 * Created by PhpStorm.
 * User: Pratik
 * Date: 2/7/2017
 * Time: 10:00 AM
 */

$file = "../uploads/template_donorInfo.xlsx";

header('Content-Description: File Transfer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename='.basename($file));
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate');
header('Pragma: public');
header('Content-Length: ' . filesize($file));
ob_clean();
flush();
readfile($file);
exit;

