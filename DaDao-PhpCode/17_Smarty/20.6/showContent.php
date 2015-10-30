<?php
require('libs/Smarty/Smarty.class.php');//包含Smarty类库文件
require("configs/conn.php");
$sql="select * from topic where id=".$_GET['id'];
$result=$conn->Execute($sql);//执行SQL语句
$article=$result->fields;//获得结果集
$smarty = new Smarty();//创建一个Smarty对象
$smarty->assign("article",$article);//给模板变量赋值
$smarty->display("showContent.tpl");//显示模板
?>
