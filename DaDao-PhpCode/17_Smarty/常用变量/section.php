<?php
require("smarty/Smarty.class.php");
$smarty=new Smarty();
$array=array("����","����","����","����");
$smarty->assign("fourseasons",$array);
$smarty->display("section.tpl");

?>