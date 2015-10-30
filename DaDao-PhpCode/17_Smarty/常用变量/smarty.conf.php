<?php
require("Smarty.class.php");
$smarty=new Smarty();
$smarty->debugging=true;  //开启调试功能
$smarty->assign("message","hello,china");
$smarty->display("smarty.conf.tpl");

?>