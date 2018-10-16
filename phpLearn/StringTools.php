<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 10:42
 */
function random($len)
{
    $source = '0123456789abcdefghijklmnopqrstuvwxyz';
    mt_srand();
    $strs = "";
    for ($i = 0; $i < $len; $i++) {
        $strs .= $source[mt_rand(0, 35)];
    }
    return $strs;
}