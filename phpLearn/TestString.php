<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/6
 * Time: 8:51
 */
require "ArrayTools.php";

echo "测试php字符串函数</br>";

$str="hello php!";

echo $str;
echo "</br>";
print_r($str);
echo "</br>";
print_r(explode(" ",$str));
echo "</br>";
$strAry=array("java","php","perl","c");
echo "</br>";
echo implode("+",$strAry);
echo "</br>";
$htmlStr="<h2>标题2应该用h2<h2>";
echo htmlspecialchars($htmlStr);
echo "</br>";
$htmlTagStr="<font color='red'>color</font><em>em</em><strong>strong</strong>";
echo strip_tags($htmlTagStr);
echo "</br>";
echo strip_tags($htmlTagStr,"<font>");
echo "</br>";
echo strip_tags($htmlTagStr,"<font><em><strong>");
echo "</br>";
echo sha1($str);
echo "</br>";
date_default_timezone_set("ETC/GMT-8");
echo date("Y-m-d H:i:s",time());
echo "</br>";
echo foreachArrayKeyValue(getdate(time()));