<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 11:47
 */

$authCode = $_POST['captcha'];

if (!empty($authCode)) {
    if (!empty($_COOKIE['authcode'])) {
        if ($_COOKIE['authcode'] == md5($authCode)) {
            echo "<script>alert('验证正确！');location.href='form.html'</script>";
        } else {
            echo "<script>alert('验证失败！');location.href='form.html'</script>";
        }
    }
}