<?php


$img = $_POST['imgBase64'];
$filename = $_POST['fname'];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$filedata = base64_decode($img);
//saving
//$filename = 'img'.uniqid().'.png';
//file_put_contents($filename, $filedata);

file_put_contents('/var/www/html/tsugi/mod/easyochem/uploads/'.$filename, $filedata);
