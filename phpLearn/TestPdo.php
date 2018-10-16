<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/13
 * Time: 15:25
 */
include "ArrayTools.php";

$dbname = "php";
$host = "localhost";
$username = "root";
$password = "root";
try {
    $db = new PDO("mysql:dbname=$dbname;host=$host", $username, $password);
    $db->query("set names 'utf8'");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    $sql = "select * from user";
    $result = $db->query($sql);
    while ($value = $result->fetch(PDO::FETCH_ASSOC)) {
        foreachArrayKeyValue($value);
    }

    $prepare = $db->prepare("insert into `user` (`name`,`sex`) values (:name,:sex)");
    $name = "youyou";
    $sex = "2";
    $prepare->bindParam(":name", $name);
    $prepare->bindParam(":sex", $sex);
    $prepare->execute();
    $db = NULL;

} catch (PDOException $e) {
    echo $e->getMessage();
    die();
}