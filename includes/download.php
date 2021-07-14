<?php
//function download(){
//$fichero = '/home/pi/respimon2020/res/FP003.csv';
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
//}
/*
function DownloadFile($file_name) { // $file = include path
  $mime = 'application/force-download';
  header('Pragma: public'); 	// required
	header('Expires: 0');		// no cache
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	header('Last-Modified: '.gmdate ('D, d M Y H:i:s', filemtime ($file_name)).' GMT');
	header('Cache-Control: private',false);
	header('Content-Type: '.$mime);
	header('Content-Disposition: attachment; filename="'.basename($file_name).'"');
	header('Content-Transfer-Encoding: binary');
	header('Content-Length: '.filesize($file_name));	// provide file size
	header('Connection: close');
	readfile($file_name);		// push it out
	exit();

}*/