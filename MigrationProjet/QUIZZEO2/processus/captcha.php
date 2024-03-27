<?php
session_start();

$_SESSION['captcha'] = mt_rand(1000,9999);
$img =imagecreate(75,35);
$font = '../assets/GloriaHallelujah.ttf';

$bg =imagecolorallocate($img, 255,255,255);
$textcolor = imagecolorallocate($img,0,0,0);

imagettftext($img,23, 0 , 0, 30, $textcolor, $font, $_SESSION['captcha']);

header('Content-Type: image/jpeg');
imagejpeg($img);
imagedestroy($img);
?>