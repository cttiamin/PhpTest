<?php
require("Smarty.class.php");
$smarty=new Smarty();
$smarty->debugging=true;  //�������Թ���
$smarty->assign("message","hello,china");
$smarty->display("smarty.conf.tpl");

?>