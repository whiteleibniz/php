<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/17
 * Time: 11:23
 */

include "CurlTools.php";
$BaiduLoginUrl = "https://www.oschina.net/action/user/hash_login?from=";

$url = curl_init($BaiduLoginUrl);
$data = array(
    "email" => "nologic@126.com",
    "pwd" => "b4728cec5c2336bc2bf390a1f1a6017f4cebfbaa",
    "verifyCode" => '',
    "save_login" => 1
);

curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
curl_setopt($url, CURLOPT_POST, true);
curl_setopt($url, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($url);
print_r($output);
curl_close($url);

echo doPost($BaiduLoginUrl, $data, null);