<?php

function main_page()		//默认调用的函数
{
	global $smarty;
	
	require_once( ROOT_PATH . 'includes/ubb.inc.php');		//包含UBB文件
	$message_array = array();
	for($i=0;$i<10;$i++)				//循环取出结果
	{
		//把结果存成二维数组
		$message_array[] = array(
			'id' 		=> $i,
			'username' 	=> '测试username',
			'content'	=> ubb('测试content'),			//用ubb函数过滤变量
		);
	}
	$smarty->assign('message' , $message_array);			//替换模板变量
	return $smarty->fetch('message.tpl');
}