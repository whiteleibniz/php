<?php

/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/4/24
 * Time: 14:43
 */
include  'TestPhpClass.php';
class TestPhpClassExtends extends TestPhpClass
{
    private $wing='';

    /**
     * @return string
     */
    public function getWing()
    {
        return $this->wing;
    }

    /**
     * @param string $wing
     */
    public function setWing($wing)
    {
        $this->wing = $wing;
    }

    function fly(){
        echo "I can fly";
    }
    function getInfo()
    {
        return parent::getInfo()."</br>我可以".$this->wing;
    }

    /**
     * @param $wing
     */
    function setInfo($wing)
    {
        $this->wing=$wing;
    }

    function __toString()
    {
        return '';
    }

}

$bird = new TestPhpClassExtends();
$bird->setInfo("飞");
echo $bird->getInfo();