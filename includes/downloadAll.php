<?php
/*print_r($_GET);
$dir ='/home/pi/respimon2020/res/history/';
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
$archive_file_name='histoy.xip';


   
foreach ($scanned_directory as $key => $value)
{
   $fichero=$dir.$value;
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
}*/
