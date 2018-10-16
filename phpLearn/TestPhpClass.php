<?php

/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/4/24
 * Time: 14:02
 */
class TestPhpClass
{
    public $name = '';
    public $color = '';
    public $age = '';

    function __construct($name,$color,$age)
    {
        $this->name=$name;
        $this->color=$color;
        $this->age=$age;
    }

    function getInfo()
    {
        return "这个动物叫做：".$this->name."</br>颜色是：".$this->color."</br>年龄是：".$this->age;
    }

    function setInfo($name)
    {
        $this->name = $name;
    }
}


$pig = new TestPhpClass("佩奇","白色","3");
$pig->setInfo("佩奇爸爸");
echo $pig->getInfo();