<?php
require_once "ArrayTools.php";

echo "测试php数组</br>";
echo "</br>";
$ary = Array("a", "b", "c");
print_r($ary);
echo "</br>";
array_pop($ary);
print_r($ary);
echo "</br>";
var_dump($ary);
array_push($ary,10);
print_r($ary);
echo "</br>";
eachArray($ary);
foreachArrayValue($ary);
foreachArrayKeyValue($ary);

?>