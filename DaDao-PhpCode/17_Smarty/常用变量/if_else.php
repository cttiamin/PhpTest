<?php
//require('smarty/Smarty.class.php');
//$smarty=new Smarty();
require_once('smartyconfig.php');

$smarty->assign("title","test smarty");
$array=array("春天","夏天","秋天","冬天");
$smarty->assign("fourseasons",$array);
$smarty->assign("scope",80);
$smarty->display('if.tpl');
?>