<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/6
 * Time: 9:52
 */
echo "测试php正则表达式</br>";

$userNameRegex="/^[a-z0-9_-]{3,16}$/";
$passwordRegex="/^[a-z0-9_-]{6,18}$/";
$emailRegex="/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/";
$hexRegex="/^#?([a-f0-9]{6}|[a-f0-9]{3})$/";
$urlRegex="/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/";
$ipRegex="/((2[0-4]\d|25[0-5]|[01]?\d\d?)\.){3}(2[0-4]\d|25[0-5]|[01]?\d\d?)/";
$htmlTagRegex="/^<([a-z]+)([^<]+)*(?:>(.*)<\/\1>|\s+\/>)$/";

echo preg_match($userNameRegex,"username");
echo "</br>";
echo preg_match($userNameRegex,"us");
echo "</br>";
echo preg_match($userNameRegex,"usaaaaaaaaaaaaaaaaaaaaaaaaaaaa");
echo "</br>";
