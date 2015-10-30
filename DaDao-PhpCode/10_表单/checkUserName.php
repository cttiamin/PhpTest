<?php
//ctype_alnum验证数据
if(isset($_POST['u_name'])){
if(ctype_alnum($_POST['u_name'])){
	echo "注册成功";
}else{
	echo "用户名只能由字母或数字组成";
}
}
?>
<form action="" method="post">
用户名：<input name="u_name" type="text" />(数字和字母组成)
<input name="" type="submit" value="提交" />
</form>