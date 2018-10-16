<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/4/24
 * Time: 13:38
 */
require_once "ArrayTools.php";
echo "测试系统变量</br>";
foreachArrayKeyValue($_SERVER);
echoSpac();
foreachArrayKeyValue($_ENV);
echoSpac();
foreachArrayKeyValue($GLOBALS["_SERVER"]);