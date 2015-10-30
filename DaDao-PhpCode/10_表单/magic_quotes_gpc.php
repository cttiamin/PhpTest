<?php
echo $_POST['test']."<br>"; 
echo addslashes($_POST['test'])."<br>"; //使用函数addslashes()转译字符
	if (!get_magic_quotes_gpc()) {//使用get_magic_quotes_gpc()函数判断magic_quotes_gpc是否开启
	    $test = addslashes($_POST['test']);//使用函数addslashes()转译字符
	} else {
	    $test = $_POST['test'];
	}
echo $test;
?>
<form action="" method="post">
测试magic_quotes_gpc<input name="test" type="text" />
<input name="" type="submit">
</form>