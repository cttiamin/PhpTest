<?php
define('ROOT_PATH' , '');									//定义根目录
header("Content-type: text/vnd.wap.wml");
//调用 Smarty

require_once( ROOT_PATH . 'includes/smarty/Smarty.class.php');		//包含smarty类文件
$smarty=new Smarty();						//初始化Smarty

$smarty->compile_check = true;			//打开模版编译检查
$smarty->debugging = false;				//关闭调试
$smarty->caching = false;				//关闭缓存
$smarty->template_dir = "template";	//设置模版路径
$smarty->compile_dir = 'template_c';	//设置编译文件存放的文件夹
$smarty->left_delimiter = '[##';		//设置左边界符
$smarty->right_delimiter = '##]';		//设置右边界符号

$smarty->assign("content", "Welcome smarty!");
$smarty->display("index.tpl");			//显示index.tpl模板

?>