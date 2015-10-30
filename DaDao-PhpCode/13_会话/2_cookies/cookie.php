<?php

if(!isset($_COOKIE['message'])){//判断Cookie是否存在
	setcookie("message", "Cookie保存成功", time()+3600);//创建Cookie，设置过期时间为一个小时
	echo "请刷新页面，将Cookie保存";
}else{
	echo $_COOKIE['message'];//输出Cookie中的信息
	echo"<a href='logout.php'>删除Cookie</a>";
}
?>
