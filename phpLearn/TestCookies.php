<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/15
 * Time: 13:19
 */
/**
 *
 */

setcookie("phpCookie", "www.php.com");
setcookie("phpCookie", "www.php.com", time() + 3600);
setcookie("phpCookie", "www.php.com", time() + 3600, "/cookie/", 1);

if (!isset($_COOKIE["visitTime"])) {
    setcookie("visitTime", date("Y-m-d h:i:s"));
    echo "欢迎第一次访问本站";
} else {
    echo "你上次访问本站时间为：" . $_COOKIE['visitTime'];
    setcookie("visitTime", date("Y-m-d h:i:s"), time() + 3600);
    echo "</br>";
}
echo "你本次访问的时间为：" . $_COOKIE['visitTime'];

if (!empty($_COOKIE['num'])) {
    $num = $_COOKIE['num'] + 1;
} else {
    $num = 1;
}
setcookie("num", $num, time() + 2678400);

echo "你是第".$num."位访客";