<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 16:23
 */
/**
 * SAX                                                          DOM
 * 依序读入文件并产生相对应事件,可以处理任何大小的XML文件。        在内存中建立文件树,不适于处理大型的XML文件。
 * 只能对文件按顺序剖析一遍，不支持对文件的随意存取                可以随意存取文件树的任何部分，没有次数限制
 * 只能读取XML文件内容，而不能修改                                可以随意修改文件树，从而修改了XML文件
 * 开发上比较复杂，需要自己来制作事件处理器                        易于理解，易于开发
 * 对工作人员更灵活，可以用SAX建立自己的XML对象模型                已经在DOM基础之上建立了文件树
 */

//读取操作
$doc = new DOMDocument("1.0", "utf-8");
$doc->load("demo.xml");
echo $doc->saveXML();

//创建操作
unset($doc);
$doc = new DOMDocument("1.0", "utf-8");
$doc->formatOutput = true;
$root = $doc->createElement("root");
$doc->appendChild($root);

$name = $doc->createElement("name", "zhangshan");
$root->appendChild($name);

$sex = $doc->createElement("sex", "man");
$root->appendChild($sex);

$age = $doc->createElement("age", 18);
$age->setAttribute("type", "num");
$root->appendChild($age);

$house = $doc->createElement("house");
$root->appendChild($house);
$address1 = $doc->createElement("address", "china");
$house->appendChild($address1);

$address2 = $doc->createElement("address", "usa");
$house->appendChild($address2);

$address3 = $doc->createElement("address", "japan");
$house->appendChild($address3);


echo($doc->saveXML());

//修改操作
$element = $doc->getElementsByTagName("house");
$elementList = $element->item(0);
$newAddress = $doc->createElement("address", "england");
$elementList->appendChild($newAddress);

echo($doc->saveXML());

//删除操作
$house = $doc->getElementsByTagName("house")->item(0);
$element = $doc->getElementsByTagName("address");
$address1 = $element->item(0);
$house->removeChild($address1);

echo($doc->saveXML());

//修改节点和属性
$address2 = $element->item(2);