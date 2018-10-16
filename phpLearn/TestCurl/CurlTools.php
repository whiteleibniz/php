<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/17
 * Time: 11:19
 */

function doPost($url, $post_data, $header)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    // 执行后不直接打印出来
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // 设置请求方式为post
    curl_setopt($ch, CURLOPT_POST, true);
    // post的变量
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    // 请求头，可以传数组
    curl_setopt($ch, CURLOPT_HEADER, $header);
    // 跳过证书检查
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    // 不从证书中检查SSL加密算法是否存在
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}