<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/17
 * Time: 9:00
 */

/**
 * php xml xml文件处理接口
 * php gd 图像处理接口
 * php smarty 模板引擎，为mvc视图 业务 控制分离做准备
 * php curl 用于解决程序内网络通信，类似java中http request.net 包
 * curl 使用步骤
 * 1.初始化
 * 2.设置选项
 * 3.提交post数据
 * 4.执行会话
 * 5.关闭会话
 */
$urlStr = "http://localhost/phpLearn/testcurl/postdeal.php";
$url = curl_init();
$ary = array(
    "act" => "button",
    "foo" => "bar"
);
curl_setopt($url, CURLOPT_URL, $urlStr);
curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($url, CURLOPT_POST, 1);
curl_setopt($url, CURLOPT_POSTFIELDS, $ary);
$output = curl_exec($url);
print_r($output);
curl_close($url);
