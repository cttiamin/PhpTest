<?php
	if(isset($_REQUEST['test'])){
	if((strlen($_REQUEST['test'])<6)){
		echo "输入长度不能小于六";
	}else{
		echo "测试成功";
	}
	}
?>
<form action="" method="post">
验证测试:<input type="text" name="test" valte="">(长度不少于6)<br>
<input type="submit" name="submit" value="测试">
</form>