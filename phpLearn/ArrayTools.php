<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/4/24
 * Time: 13:44
 */

//function start
function echoSpac()
{
    echo "==================================================";
}

;

function eachArray($ary)
{
    for ($i = 0; $i < count($ary); $i++) {
        $kav = each($ary);
        echo $kav['key'] . "==>" . $kav['value'] . "</br>";
    }
}

function foreachArrayValue($ary)
{
    foreach ($ary as $value) {
        echo $value . "</br>";
    }
}

function foreachArrayKeyValue($ary)
{
    foreach ($ary as $key => $value) {
        if(is_array($value)){
            foreachArrayKeyValue($value);
        }else{
            echo $key . "=>" . $value . "</br>";
        }
    }
}

function bianli($ary)
{
    foreach ($ary as $v) {
        if (is_array($v)) {
            bianli($v);
        } else {
            echo $v;
        }
    }
}
//function end