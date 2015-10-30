<?php
require("smarty/Smarty.class.php");
$smarty=new Smarty();
$array=array("春天","夏天","秋天","冬天");
$smarty->assign("fourseasons",$array);
$smarty->display("section.tpl");

?>