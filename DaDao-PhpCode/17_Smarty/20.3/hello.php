<?php
require('Smarty.class.php');//包含Smarty类库文件
$smarty = new Smarty();//创建一个Smarty对象
$smarty->assign("title","test Smarty");//给模板变量赋值
$smarty->assign("name","sunyang");//给模板变量赋值
$smarty->display("my.tpl");//显示模板
?>