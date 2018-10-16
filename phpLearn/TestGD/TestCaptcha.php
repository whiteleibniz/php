<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 10:34
 */
include "./../StringTools.php";
define("WIDTH", 50);
define("HEIGHT", 25);
session_start();

$str = random(4);
$imgBg = imagecreatetruecolor(WIDTH, HEIGHT);
$bulePen = imagecolorallocate($imgBg, 0, 0, 255);
$fontPen = imagecolorallocate($imgBg, 255.0, 0, 0);
$backPen = imagecolorallocate($imgBg, 0xff, 0xff, 0xff);
imagefill($imgBg, 0, 0, $backPen);
mt_srand();
for ($i = 0; $i < 100; $i++) {
    imagesetpixel($imgBg, mt_rand(0, WIDTH), mt_rand(0, HEIGHT), $bulePen);
}
imagestring($imgBg, 5, 7, 5, $str, $fontPen);
imagerectangle($imgBg, 0, 0, WIDTH - 1, HEIGHT - 1, $fontPen);
header("Content-type:image/jpeg");
imagejpeg($imgBg);
imagedestroy($imgBg);

$str = md5($str);
setcookie("authcode", $str, time() + 3600, "/");
