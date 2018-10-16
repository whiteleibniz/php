<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 9:17
 */
/**
 * GD库使用
 * 1.创建画布
 * 2.绘制图像
 * 3.输出图像
 * 4.释放资源
 */

define("WIDTH", 100);
define("HEIGHT", 100);
$imgBg = imagecreatetruecolor(WIDTH, HEIGHT);
$bluePen = imagecolorallocate($imgBg, 0, 0, 255);
$redPen = imagecolorallocate($imgBg, 255, 0, 0);
$whitePen = imagecolorallocate($imgBg, 255, 255, 255);
imagefill($imgBg, 0, 0, $bluePen);

imagesetpixel($imgBg, 50, 50, $redPen);
imageline($imgBg, 0, 0, 100, 100, $whitePen);
imagerectangle($imgBg, 10, 10, 90, 90, $redPen);
imagefilledrectangle($imgBg, 10, 10, 90, 90, $redPen);

header('content-type:image/jpeg');
imagejpeg($imgBg);
imagedestroy($imgBg);

