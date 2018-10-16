<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 14:13
 */
define("HEIGHT", 300);
define("WIDTH", "300");
header("Content-type:image/png");
$imgBg = imagecreatetruecolor(WIDTH, HEIGHT);
$imgFile = imagecreatefrompng("i-img.png");
$imgFilex = imagesx($imgFile);
$imgFiley = imagesy($imgFile);
$bgPen = imagecolorallocate($imgBg, 0, 0, 0);
imagecopyresized($imgBg, $imgFile, 0, 0, 0, 0, 300, 300, $imgFilex, $imgFiley);
imagepng($imgBg);