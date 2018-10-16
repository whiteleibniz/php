<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/11
 * Time: 8:56
 */
require_once "MysqlTools.php";
require_once "ArrayTools.php";

echo  "测试php连接数据库操作";
echo "</br>";
$mysql_conn=@mysqli_connect("localhost","root","","php") or die("链接失败！");
echo "</br>";
echo "链接成功！";
echo "</br>";
mysqli_select_db($mysql_conn,"php");
mysqli_set_charset($mysql_conn,"utf8");
$sql="select * from user";
$result=mysqli_query($mysql_conn,$sql);
while ($row=mysqli_fetch_row($result)){
    foreachArrayKeyValue($row);
}

