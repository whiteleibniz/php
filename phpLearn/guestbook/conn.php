<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/13
 * Time: 8:56
 */

$conn=mysqli_connect("localhost","root","","php");
mysqli_select_db($conn,"php");
mysqli_set_charset($conn,"utf8");