<?php
//Filter验证邮箱
if(filter_has_var(INPUT_POST,'u_email')){  //过滤数据是否存在
	$testemail=filter_input(INPUT_POST,'u_email',FILTER_VALIDATE_EMAIL); //INPUT_POST 是预定常量，可以是INPUT_GET,INPUT_COOKIE,INPUT_REQUEST,INPUT_SERVER,INPUT_SESSION
	if($testemail){
		echo "Email地址格式正确!";
	}else{
		echo "Email地址格式错误";
	}
}
?>
<form action="" method="post">
Email地址：<input name="u_email" type="text" />
<input name="submit" type="submit" value="提交"/>
</form>