<?php


 if ($_GET['action'] =='Actual')
 {
   print_r($_GET);
   $fichero = '/home/pi/respimon2020/res/history/actual.hist';

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
  
  /*
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
//var_dump($scanned_directory);
$archive_file_name='/home/pi/respimon2020/res/history/histoy.zip';

$zip = new ZipArchive();
echo $zip->status;
//$filename = "./test112.zip";

if ($zip->open($archive_file_name, ZipArchive::CREATE)!==TRUE) {
   echo "Entro ";
}
else{
  echo "error";
}*/
$dir ='/home/pi/respimon2020/res/history/';
$scanned_directory = array_diff(scandir($dir), array('..', '.'));
$name = tempnam(sys_get_temp_dir(), "FOO");
$zip = new ZipArchive;
$res = $zip->open($name, ZipArchive::OVERWRITE); /* truncate as empty file is not valid */
if ($res === TRUE) {
  foreach ($scanned_directory as $key => $value)
{
  $fichero=$dir.$value;

    $zip->addFile($fichero);
   // $zip->addFile('/home/pi/respimon2020/res/history/patient2.cfg');
  }
    $zip->close();
ob_clean();
ob_end_flush(); // more important function - (without - error corrupted zip)
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header('Content-Type: application/zip;\n');
header("Content-Transfer-Encoding: Binary");
header("Content-Disposition: attachment; filename=hist.zip");
readfile($name);
unlink($name);
exit();


} else {
    echo 'failed';
}

}