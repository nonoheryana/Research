<?php
$path = str_replace('system/', '', BASEPATH);
$file = $path.'/upload/'.$document;


$filename = 'Custom file name for the.pdf'; 
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($file));
header('Accept-Ranges: bytes');

@readfile($file);
?>