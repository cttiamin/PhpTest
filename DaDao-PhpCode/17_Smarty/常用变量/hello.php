<?php
require('smarty/Smarty.class.php');
define('ME','这是常量');		//定义一个常量
$smarty=new Smarty();
$smarty->assign("title","test smarty");
$smarty->assign("name","Smarty");
//$smatry->assign("scope",80);
$smarty->display('my.tpl');
?>