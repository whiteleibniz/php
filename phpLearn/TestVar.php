<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/15
 * Time: 15:20
 */

/**
一张表了解 empty  is_null  isset 区别
变量	       empty	is_null	isset
$a=””	    true	false	true
$a=null	    true	true	false
var $a	    true	true	false
$a=array()  true	false	true
$a=false	true	false	true
$a=15	    false	false	true
$a=1	    false	false	true
$a=0	    true	false	true
$a=”0”	    true	false	true
$a=”true” false	false	true
$a=”false”false	false	true
 */

$var = "2";
echo isset($var);
echo "</br>";
unset($var);
echo "</br>";
echo isset($var);
echo "</br>";
echo empty($var);

