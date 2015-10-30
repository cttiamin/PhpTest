<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$requetURL=$_SERVER["HTTP_REFERER"];//请求的url地址
	$serName=$_SERVER["SERVER_NAME"];//主机名
	$path=$_SERVER["PHP_SELF"];//当前脚本在服务器中的路径
	$serAddress="http://".$serName.$path;//请求的主机地址（由"http://"+主机名+当前脚本的相对路		径组成）
	echo "数据来源：".$requetURL."<br>";
	echo "主机地址：".$serAddress."<br>";
		if(strcmp($requetURL,$serAddress)==0){
		echo "数据来源合法"."<br>";
		}else{
		echo "数据来源非法";
		}
}
 ?>
<form action="" method="POST">
<input type="submit" name="submit" value="submit">
</form>
