<?php
require('Smarty.class.php');//����Smarty����ļ�
$smarty = new Smarty();//����һ��Smarty����
$smarty->assign("title","test Smarty");//��ģ�������ֵ
$smarty->assign("name","sunyang");//��ģ�������ֵ
$smarty->display("my.tpl");//��ʾģ��
?>