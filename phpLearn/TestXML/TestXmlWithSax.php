<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/16
 * Time: 14:59
 */

function startElementHandler($parser, $element, $attributes)
{
    echo "元素开始:" . $element . "</br>";
    if ($attributes) {
        echo "属性";
    }
    foreach ($attributes as $name => $value) {
        echo $name . "=>" . $value . "</br>";
    }
}

function endElementHandler($parser, $element)
{
    echo "元素结束" . $element . "</br>";
}

function characterDataHandler($parser, $data)
{
    if (trim($data)) {
        echo "字符串数据" . htmlentities($data) . "</br>";
    }
}

function parserError($parser)
{
    $error = xml_error_string(xml_get_error_code($parser));
    $errorColumn = xml_get_current_column_number();
    $errorLine = xml_get_current_line_number();
    return "错误：" . $error . "在第" . $errorLine . "行第" . $errorColumn . "列";
}

$parser = xml_parser_create("utf-8");
xml_set_element_handler($parser, 'startElementHandler', "endElementHandler");
xml_set_character_data_handler($parser, "characterDataHandler");
$xml = file_get_contents("demo.xml");
xml_parse($parser, $xml) or die(parserError($parser));
xml_parser_free($parser);
