<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/6
 * Time: 11:30
 * 中文
 */

require_once "FileTools.php";
require_once "ArrayTools.php";
echo  "测试php文件操作";
$fileName="C:\\xampp\\htdocs\\phpLearn\\TestFile.php";
chechFile($fileName);
echo "</br>";
readFileWithSize($fileName,10);
echo "</br>";
readFileFull($fileName);
echo "</br>";
foreachArrayKeyValue(file($fileName));
echo "</br>";

foreachArrayKeyValue($_POST);

#form text begain
if(strpos(php_uname(),"Windows")!== false){
    $post=$_POST['input']."\r\n";
}else{
    $post=$_POST['input']."\r\n";
}

$tempFileName='C:\\xampp\\htdocs\\phpLearn\\tempFile.txt';
$tempFile=fopen($tempFileName,'a+');

if($_POST['input']){
    fwrite($tempFile,$post);
}
fclose($tempFile);
readFileFull($tempFileName);
#form text end
deleteFile($tempFileName);
echoSpac();
$gpUrl="http://hq.sinajs.cn/list=sh600151";
readFileFull($gpUrl);
echoSpac();
$dirFrom = "C:\\phptest\\resource";
$dirTo="C:\\phptest\\copy";
//copyDir($dirFrom,$dirTo);

foreachArrayKeyValue($_FILES);
?>


