<?php
session_start();
function __autoload($classname){
	include $classname.'.class.php';
}
//include "checkcode.class.php";
$code = new checkcode();
$code->bg_color="#FFFFFF";
$code->font_color = "#7EAD01";
$code->getimage();

$_SESSION['code'] = $code->getcode();
echo $_SESSION['code'];
