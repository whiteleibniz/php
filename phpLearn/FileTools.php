<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/9
 * Time: 9:34
 */
require_once "ArrayTools.php";

function chechFile($fileName){
    if(!file_exists($fileName)){
        exit("文件不存在！</br>");
    }
    echo "文件名称:".$fileName."</br>";
    echo "文件类型:".filetype($fileName)."</br>";
    echo "文件大小:".filesize($fileName)."</br>";
    echo "文件是否可执行:".is_executable($fileName)."</br>";
    echo "文件是否可读:",is_readable($fileName)."</br>";
    echo "文件是否可写:".is_writable($fileName)."</br>";
    echo "basename:".basename($fileName)."</br>";
    echo "dirname:".dirname($fileName)."</br>";
    foreachArrayKeyValue(pathinfo($fileName));
}

function readFileWithSize($fileName,$size){
    $file=fopen($fileName,'r') or die("打开文件失败！");
    $fileText=fread($file,$size);
    fclose($file);
    echo $fileText;
}

function readFileFull($fileName){
    $file=fopen($fileName,'r') or die("打开文件失败！");
    $text='';
    while(!feof($file)){
        $text.=fread($file,1);
    }
    echo iconv("GBK","UTF-8",$text);
    fclose($file);
}

function deleteFile($fileName){
    if(is_file($fileName)){
        if(unlink($fileName)){
            echo "删除文件成功！";
        }else{
            echo "删除文件失败！";
        }
    }else {
        echo "文件不存在！";
    }
}

function deleteFolder($dir){
    if(is_dir($dir)){
        $dirHandle=opendir($dir);
        readdir($dirHandle);
        readdir($dirHandle);
        while(false!==($file=readdir($dirHandle))){
            $fileName=$dir.DIRECTORY_SEPARATOR.$file;
            if(is_dir($fileName)){
                deleteFolder($fileName);
            }else{
                if(unlink($fileName)){
                    echo "删除文件成功!".$fileName;
                }else{
                    echo "删除文件失败！".$fileName;
                }
            }
        }
        closedir($dirHandle);
        if(rmdir($dir)){
            echo "删除文件夹成功！".$dir;
        }else{
            echo "删除文件夹失败！".$dir;
        }
    }
}

function copyDir($dirFrom,$dirTo){
    if(is_file($dirTo)){
        echo "无法建立目录".$dirTo;
    }
    if(!file_exists($dirTo)){
        mkdir($dirTo);
    }
    $dirFromHandle=opendir($dirFrom);
    readdir($dirFromHandle);
    readdir($dirFromHandle);

    while(false!==($file=readdir($dirFromHandle))){
        $fileFrom=$dirFrom.DIRECTORY_SEPARATOR.$file;
        $fileTo=$dirTo.DIRECTORY_SEPARATOR.$file;

        if(is_dir($fileFrom)){
            copyDir($fileFrom,$fileTo);
        }else{
            copy($fileFrom,$fileTo);
        }
    }
    closedir($dirFromHandle);
}


