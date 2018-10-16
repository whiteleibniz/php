<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 2017/5/15
 * Time: 16:10
 */
//include "./../TestSmarty/Smarty/Smarty.class.php";

include "Smarty/Smarty.class.php";
define("SMARTY_ROOT", "tpls");
$smarty = new Smarty();
$smarty->setTemplateDir(SMARTY_ROOT . "/templates/");
$smarty->setCompileDir(SMARTY_ROOT . "/templates_c/");
$smarty->setConfigDir(SMARTY_ROOT . "/configs/");
$smarty->setCacheDir(SMARTY_ROOT . "/cache/");
$smarty->caching = 0;

$smarty->cache_lifetime = 60 * 60 * 24;
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

?>