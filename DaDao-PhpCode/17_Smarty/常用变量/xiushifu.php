<?php
require_once('smartyconfig.php');
//require("Smarty.class.php");
//$smarty=new Smarty();
$smarty->assign("message","hello,china");
$smarty->display("xiushifu.tpl");

?>