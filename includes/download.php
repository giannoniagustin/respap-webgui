<?php
//function download(){
//$fichero = '/home/pi/respimon2020/res/FP003.csv';

 if ($_GET['action'] =='Actual')
 {
   print_r($_GET);
   $fichero = '/home/pi/respimon2020/res/actual.hist';

if (file_exists($fichero)) {

    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fichero).'"');
    header("Content-Transfer-Encoding: Binary"); 

    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fichero));
    readfile($fichero);
    exit;
}
else{
  echo "Error al descargar";
}
}
else
{
  
  $dir ='/home/pi/respimon2020/res/history/';
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
$archive_file_name='histoy.zip';


}