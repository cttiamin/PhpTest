<?php
require('smarty/Smarty.class.php');
define('ME','���ǳ���');		//����һ������
$smarty=new Smarty();
$smarty->assign("title","test smarty");
$smarty->assign("name","Smarty");
//$smatry->assign("scope",80);
$smarty->display('my.tpl');
?>