<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/15
 * Time: 15:52
 */
include "main.php";
include "conn.php";
include "./../ArrayTools.php";
$sql = "select * from news";
$result = mysqli_query($conn, $sql);
if ($result) {
    while ($rs = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $ary[] = $rs;
    }
    print_r($ary);
    $smarty->assign("news", $ary);
}
$smarty->assign("title", "php为你展示samrty模板技术");
$smarty->assign("content", "php详细内容介绍");
$smarty->display("tpls/templates/leapsoul.tpl");

