<?php
require('libs/Smarty/Smarty.class.php');//����Smarty����ļ�
require("configs/conn.php");
$sql="select * from topic where id=".$_GET['id'];
$result=$conn->Execute($sql);//ִ��SQL���
$article=$result->fields;//��ý����
$smarty = new Smarty();//����һ��Smarty����
$smarty->assign("article",$article);//��ģ�������ֵ
$smarty->display("showContent.tpl");//��ʾģ��
?>
